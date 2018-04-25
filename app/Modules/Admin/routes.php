<?php

Route::group(['module' => 'Admin', 'prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function() {

    Route::get('/dashboard', 'DashboardController@index');

    // Route Category
    Route::get('category', 'CategoryController@index');
    Route::get('category/create', 'CategoryController@getCreate');
    Route::post('category/create', 'CategoryController@postCreate');
    Route::get('category/edit/{id}', 'CategoryController@getEdit');
    Route::post('category/edit', 'CategoryController@postEdit');
    Route::post('category/delete', 'CategoryController@postDelete');

	// Route User
	Route::get('/user', 'UserController@getIndex');
    Route::get('user/create', 'UserController@getCreate');
    Route::post('user/create', 'UserController@postCreateUser');
    Route::get('user/edit/{id}', 'UserController@getEdit');
    Route::post('user/edit', 'UserController@postEdit');
    Route::post('user/delete', 'UserController@postDelete');    

    // Route Test
    Route::get('/test', 'TestController@index');
    Route::get('test/create', 'TestController@getCreate');
    Route::post('test/create', 'TestController@postCreate');
    Route::get('test/edit/{id}', 'TestController@getEdit');
    Route::post('test/edit', 'TestController@postEdit');
});