<?php

namespace SBD\Softadmin\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SBD\Softadmin\Models\DataType;
use SBD\Softadmin\Softadmin;

class SoftadminBreadController extends Controller
{
    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************

    public function index(Request $request)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = DataType::where('slug', '=', $slug)->first();

        // Check permission
        Softadmin::can('browse_'.$dataType->name);

        // Next Get the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);
            if ($model->timestamps) {
                $dataTypeContent = $model->latest()->get();
            } else {
                $dataTypeContent = $model->orderBy('id', 'DESC')->get();
            }
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = DB::table($dataType->name)->get();
        }

        $view = 'softadmin::bread.browse';

        if (view()->exists("softadmin::$slug.browse")) {
            $view = "softadmin::$slug.browse";
        }

        return view($view, compact('dataType', 'dataTypeContent'));
    }

    //***************************************
    //                _____
    //               |  __ \
    //               | |__) |
    //               |  _  /
    //               | | \ \
    //               |_|  \_\
    //
    //  Read an item of our Data Type B(R)EAD
    //
    //****************************************

    public function show(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = DataType::where('slug', '=', $slug)->first();

        // Check permission
        Softadmin::can('read_'.$dataType->name);

        $dataTypeContent = (strlen($dataType->model_name) != 0)
            ? call_user_func([$dataType->model_name, 'findOrFail'], $id)
            : DB::table($dataType->name)->where('id', $id)->first(); // If Model doest exist, get data from table name

        $view = 'softadmin::bread.read';

        if (view()->exists("softadmin::$slug.read")) {
            $view = "softadmin::$slug.read";
        }

        return view($view, compact('dataType', 'dataTypeContent'));
    } 
}
