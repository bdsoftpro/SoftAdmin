<?php

namespace SBD\Softadmin\Http\Controllers;

use Illuminate\Http\Request;
use SBD\Softadmin\Models\DataType;
use SBD\Softadmin\Softadmin;

class SoftadminRoleController extends SoftadminBreadController
{
    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        Softadmin::can('edit_roles');

        $slug = $this->getSlug($request);

        $dataType = DataType::where('slug', '=', $slug)->first();

        $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
        $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

        $data->permissions()->sync($request->input('permissions', []));

        return redirect()
            ->route("softadmin.{$dataType->slug}.index")
            ->with([
                'message'    => "Successfully Updated {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    // POST BRE(A)D
    public function store(Request $request)
    {
        Softadmin::can('add_roles');

        $slug = $this->getSlug($request);

        $dataType = DataType::where('slug', '=', $slug)->first();

        if (function_exists('voyager_add_post')) {
            $url = $request->url();
            voyager_add_post($request);
        }

        $data = new $dataType->model_name();
        $this->insertUpdateData($request, $slug, $dataType->addRows, $data);

        $data->permissions()->sync($request->input('permissions', []));

        return redirect()
            ->route("softadmin.{$dataType->slug}.index")
            ->with([
                'message'    => "Successfully Added New {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }
}
