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

    public function index($id)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = 'pages';

        // GET THE DataType based on the slug
        $dataType = DataType::where('slug', '=', $slug)->first();

        $dataTypeContent = DB::table($dataType->name)->where('slug', $id)->first(); // If Model doest exist, get data from table name

        if(!$dataTypeContent){
                // GET THE SLUG, ex. 'posts', 'pages', etc.
            $slug = 'posts';

            // GET THE DataType based on the slug
            $dataType = DataType::where('slug', '=', $slug)->first();

            $dataTypeContent = DB::table($dataType->name)->where('slug', $id)->first(); // If Model doest exist, get data from table name
        }

        $view = 'softadmin::frontend.bread.read';

        if (view()->exists("softadmin::frontend.$slug.read")) {
            $view = "softadmin::frontend.$slug.read";
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

        $dataTypeContent = DB::table($dataType->name)->where('slug', $id)->first(); // If Model doest exist, get data from table name

        $view = 'softadmin::frontend.bread.read';

        if (view()->exists("softadmin::frontend.$slug.read")) {
            $view = "softadmin::frontend.$slug.read";
        }

        return view($view, compact('dataType', 'dataTypeContent'));
    } 
}
