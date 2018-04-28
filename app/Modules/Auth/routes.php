<?php

Route::group(['module' => 'Auth', 'prefix' => 'auth', 'namespace' => 'App\Modules\Auth\Controllers'], function() {

    Route::get('/login', 'AuthController@index');
    Route::post('do-login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
});