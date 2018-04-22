<?php

Route::group(['module' => 'Test', 'prefix' => 'test', 'namespace' => 'App\Modules\Test\Controllers'], function() {

    Route::get('/', 'TestController@index');
    Route::get('/create', 'TestController@getCreate');
    Route::post('/create', 'TestController@postCreate');
    //edit
    Route::get('/edit/{id}', 'TestController@getEdit');
    Route::post('/edit', 'TestController@postEdit');
});