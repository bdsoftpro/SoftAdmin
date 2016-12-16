<?php

use Illuminate\Database\Seeder;
use SBD\Softadmin\Models\Menu;
use SBD\Softadmin\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');

            $menu = Menu::where('name', 'admin')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Dashboard',
                'url'        => route('softadmin.dashboard', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-boat',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 1,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Media',
                'url'        => route('softadmin.media.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-images',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 5,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Posts',
                'url'        => route('softadmin.posts.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-news',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 6,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Users',
                'url'        => route('softadmin.users.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-person',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Categories',
                'url'        => route('softadmin.categories.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-categories',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 8,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Pages',
                'url'        => route('softadmin.pages.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-file-text',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 7,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Roles',
                'url'        => route('softadmin.roles.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-lock',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 2,
                ])->save();
            }

            $toolsMenuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Tools',
                'url'        => '',
            ]);
            if (!$toolsMenuItem->exists) {
                $toolsMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-tools',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 9,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Menu Builder',
                'url'        => route('softadmin.menus.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-list',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => 10,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Database',
                'url'        => route('softadmin.database.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-data',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => 11,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id'    => $menu->id,
                'title'      => 'Settings',
                'url'        => route('softadmin.settings.index', [], false),
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'softadmin-settings',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 12,
                ])->save();
            }
        }
    }
}
