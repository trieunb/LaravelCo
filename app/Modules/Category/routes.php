<?php

Route::group(['module' => 'Category', 'prefix' => 'category', 'namespace' => 'App\Modules\Category\Controllers'], function() {

    Route::get('/', 'CategoryController@index');
    Route::get('/create', 'CategoryController@getCreate');
    Route::post('/create', 'CategoryController@postCreate');

});