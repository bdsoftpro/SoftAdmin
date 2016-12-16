<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User config
    |--------------------------------------------------------------------------
    |
    | Here you can specify softadmin user configs
    |
    */

    'user' => [
        'add_default_role_on_register' => true,
        'default_role'                 => 'user',
        'admin_permission'             => 'browse_admin',
        'namespace'                    => App\User::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify softadmin controller settings
    |
    */

    'controllers' => [
        'namespace' => 'SBD\\Softadmin\\Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Path to the Softadmin Assets
    |--------------------------------------------------------------------------
    |
    | Here you can specify the location of the softadmin assets path
    |
    */

    'assets_path' => '/public/vendor/sbd/softadmin/assets',

    /*
    |--------------------------------------------------------------------------
    | Storage Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify attributes related to your application file system
    |
    */

    'storage' => [
        'subfolder' => 'public/', // include trailing slash, like 'my_folder/'
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify softadmin database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => [], // database tables that are hidden from the admin panel
        ],
    ],

];
