<?php

use Illuminate\Database\Seeder;
use SBD\Softadmin\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $dataType = DataType::firstOrNew([
            'slug'                  => 'posts',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural'   => 'Posts',
                'icon'                  => 'softadmin-news',
                'model_name'            => 'SBD\\Softadmin\\Models\\Post',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = DataType::firstOrNew([
            'slug'                  => 'pages',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural'   => 'Pages',
                'icon'                  => 'softadmin-file-text',
                'model_name'            => 'SBD\\Softadmin\\Models\\Page',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = DataType::firstOrNew([
            'slug'                  => 'users',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => 'User',
                'display_name_plural'   => 'Users',
                'icon'                  => 'softadmin-person',
                'model_name'            => 'SBD\\Softadmin\\Models\\User',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = DataType::firstOrNew([
            'name'                  => 'categories',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural'   => 'Categories',
                'icon'                  => 'softadmin-categories',
                'model_name'            => 'SBD\\Softadmin\\Models\\Category',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = DataType::firstOrNew([
            'slug'                  => 'menus',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural'   => 'Menus',
                'icon'                  => 'softadmin-list',
                'model_name'            => 'SBD\\Softadmin\\Models\\Menu',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = DataType::firstOrNew([
            'slug'                  => 'roles',
        ]);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural'   => 'Roles',
                'icon'                  => 'softadmin-lock',
                'model_name'            => 'SBD\\Softadmin\\Models\\Role',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }
}
