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

Route::group(['as' => 'softfront.'], function () {
    $namespacePrefix = '\\SBD\\Softadmin\\Http\\Controllers\\Frontend\\';
    try {
        foreach (\SBD\Softadmin\Models\DataType::all() as $dataTypes) {
            Route::resource($dataTypes->slug, $namespacePrefix.'SoftadminBreadController');
        }
    } catch (\InvalidArgumentException $e) {
        throw new \InvalidArgumentException("Custom routes hasn't been configured because: ".$e->getMessage(), 1);
    } catch (\Exception $e) {
        // do nothing, might just be because table not yet migrated.
    }
});
