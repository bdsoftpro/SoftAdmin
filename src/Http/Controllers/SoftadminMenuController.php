<?php

namespace SBD\Softadmin\Http\Controllers;

use Illuminate\Http\Request;
use SBD\Softadmin\Models\Menu;
use SBD\Softadmin\Models\MenuItem;
use SBD\Softadmin\Softadmin;

class SoftadminMenuController extends Controller
{
    public function builder($id)
    {
        Softadmin::can('edit_menus');

        $menu = Menu::find($id);

        return view('softadmin::menus.builder', compact('menu'));
    }

    public function delete_menu($menu, $id)
    {
        Softadmin::can('delete_menus');

        $item = MenuItem::find($id);
        //$menuId = $item->menu_id;
        $item->destroy($id);

        return redirect()
            ->route('softadmin.menus.builder', [$menu])
            ->with([
                'message'    => 'Successfully Deleted Menu Item.',
                'alert-type' => 'success',
            ]);
    }

    public function add_item(Request $request)
    {
        Softadmin::can('add_menus');

        $data = $request->all();
        $highestOrderMenuItem = MenuItem::where('parent_id', '=', null)
            ->orderBy('order', 'DESC')
            ->first();

        $data['order'] = isset($highestOrderMenuItem->id)
            ? intval($highestOrderMenuItem->order) + 1
            : 1;

        MenuItem::create($data);

        return redirect()
            ->route('softadmin.menus.builder', [$data['menu_id']])
            ->with([
                'message'    => 'Successfully Created New Menu Item.',
                'alert-type' => 'success',
            ]);
    }

    public function update_item(Request $request)
    {
        Softadmin::can('edit_menus');

        $id = $request->input('id');
        $data = $request->except(['id']);
        $menuItem = MenuItem::find($id);
        $menuItem->update($data);

        return redirect()
            ->route('softadmin.menus.builder', [$menuItem->menu_id])
            ->with([
                'message'    => 'Successfully Updated Menu Item.',
                'alert-type' => 'success',
            ]);
    }

    public function order_item(Request $request)
    {
        $menuItemOrder = json_decode($request->input('order'));

        $this->orderMenu($menuItemOrder, null);
    }

    private function orderMenu(array $menuItems, $parentId)
    {
        foreach ($menuItems as $index => $menuItem) {
            $item = MenuItem::find($menuItem->id);
            $item->order = $index + 1;
            $item->parent_id = $parentId;
            $item->save();

            if (isset($menuItem->children)) {
                $this->orderMenu($menuItem->children, $item->id);
            }
        }
    }
}
