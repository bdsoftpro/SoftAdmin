<?php

/*
|--------------------------------------------------------------------------
| Softadmin Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with Softadmin.
|
*/

Route::group(['as' => 'softadmin.'], function () {
    $namespacePrefix = '\\SBD\\Softadmin\\Http\\Controllers\\';

    Route::get('login', ['uses' => $namespacePrefix.'SoftadminAuthController@login', 'as' => 'login']);
    Route::post('login', ['uses' => $namespacePrefix.'SoftadminAuthController@postLogin', 'as' => 'postlogin']);

    Route::group(['middleware' => ['admin.user']], function () use ($namespacePrefix) {

        // Main Admin and Logout Route
        Route::get('/', ['uses' => $namespacePrefix.'SoftadminController@index', 'as' => 'dashboard']);
        Route::get('logout', ['uses' => $namespacePrefix.'SoftadminController@logout', 'as' => 'logout']);
        Route::post('upload', ['uses' => $namespacePrefix.'SoftadminController@upload', 'as' => 'upload']);

        Route::get('profile', ['uses' => $namespacePrefix.'SoftadminController@profile', 'as' => 'profile']);

        try {
            foreach (\SBD\Softadmin\Models\DataType::all() as $dataTypes) {
                Route::resource($dataTypes->slug, $namespacePrefix.'SoftadminBreadController');
            }
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException("Custom routes hasn't been configured because: ".$e->getMessage(), 1);
        } catch (\Exception $e) {
            // do nothing, might just be because table not yet migrated.
        }

        // Role Routes
        Route::resource('roles', $namespacePrefix.'SoftadminRoleController');

        // Menu Routes
        Route::group([
            'as'     => 'menus.',
            'prefix' => 'menus/{menu}',
        ], function () use ($namespacePrefix) {
            Route::get('builder', ['uses' => $namespacePrefix.'SoftadminMenuController@builder', 'as' => 'builder']);
            Route::post('order', ['uses' => $namespacePrefix.'SoftadminMenuController@order_item', 'as' => 'order']);

            Route::group([
                'as'     => 'item.',
                'prefix' => 'item',
            ], function () use ($namespacePrefix) {
                Route::delete('{id}', ['uses' => $namespacePrefix.'SoftadminMenuController@delete_menu', 'as' => 'destroy']);
                Route::post('/', ['uses' => $namespacePrefix.'SoftadminMenuController@add_item', 'as' => 'add']);
                Route::put('/', ['uses' => $namespacePrefix.'SoftadminMenuController@update_item', 'as' => 'update']);
            });
        });

        // Settings
        Route::group([
            'as'     => 'settings.',
            'prefix' => 'settings',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix.'SoftadminSettingsController@index', 'as' => 'index']);
            Route::post('/', ['uses' => $namespacePrefix.'SoftadminSettingsController@store', 'as' => 'store']);
            Route::put('/', ['uses' => $namespacePrefix.'SoftadminSettingsController@update', 'as' => 'update']);
            Route::delete('{id}', ['uses' => $namespacePrefix.'SoftadminSettingsController@delete', 'as' => 'delete']);
            Route::get('{id}/move_up', ['uses' => $namespacePrefix.'SoftadminSettingsController@move_up', 'as' => 'move_up']);
            Route::get('{id}/move_down', ['uses' => $namespacePrefix.'SoftadminSettingsController@move_down', 'as' => 'move_down']);
            Route::get('{id}/delete_value', ['uses' => $namespacePrefix.'SoftadminSettingsController@delete_value', 'as' => 'delete_value']);
        });

        // Admin Media
        Route::group([
            'as'     => 'media.',
            'prefix' => 'media',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix.'SoftadminMediaController@index', 'as' => 'index']);
            Route::post('files', ['uses' => $namespacePrefix.'SoftadminMediaController@files', 'as' => 'files']);
            Route::post('new_folder', ['uses' => $namespacePrefix.'SoftadminMediaController@new_folder', 'as' => 'new_folder']);
            Route::post('delete_file_folder', ['uses' => $namespacePrefix.'SoftadminMediaController@delete_file_folder', 'as' => 'delete_file_folder']);
            Route::post('directories', ['uses' => $namespacePrefix.'SoftadminMediaController@get_all_dirs', 'as' => 'get_all_dirs']);
            Route::post('move_file', ['uses' => $namespacePrefix.'SoftadminMediaController@move_file', 'as' => 'move_file']);
            Route::post('rename_file', ['uses' => $namespacePrefix.'SoftadminMediaController@rename_file', 'as' => 'rename_file']);
            Route::post('upload', ['uses' => $namespacePrefix.'SoftadminMediaController@upload', 'as' => 'upload']);
        });

        // Database Routes
        Route::group([
            'as'     => 'database.',
            'prefix' => 'database',
        ], function () use ($namespacePrefix) {
            Route::post('bread/create', ['uses' => $namespacePrefix.'SoftadminDatabaseController@addBread', 'as' => 'create_bread']);
            Route::post('bread/', ['uses' => $namespacePrefix.'SoftadminDatabaseController@storeBread', 'as' => 'store_bread']);
            Route::get('bread/{id}/edit', ['uses' => $namespacePrefix.'SoftadminDatabaseController@addEditBread', 'as' => 'edit_bread']);
            Route::put('bread/{id}', ['uses' => $namespacePrefix.'SoftadminDatabaseController@updateBread', 'as' => 'update_bread']);
            Route::delete('bread/{id}', ['uses' => $namespacePrefix.'SoftadminDatabaseController@deleteBread', 'as' => 'delete_bread']);
        });

        Route::resource('database', $namespacePrefix.'SoftadminDatabaseController');
    });
});
