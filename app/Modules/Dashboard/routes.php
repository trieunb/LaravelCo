<?php

Route::group(['module' => 'Dashboard', 'prefix' => 'dashboard', 'namespace' => 'App\Modules\Dashboard\Controllers'], function() {

    Route::get('/', 'DashboardController@index');

});