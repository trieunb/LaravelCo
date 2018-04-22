<?php

Route::group(['module' => 'User', 'prefix' => 'user', 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::get('/', 'UserController@getIndex');
    Route::get('/create', 'UserController@getCreate');
    Route::post('/create', 'UserController@postCreateUser');

    Route::get('/edit/{id}', 'UserController@getEdit');
    Route::post('/edit', 'UserController@postEdit');
    Route::post('/delete', 'UserController@postDelete');
});