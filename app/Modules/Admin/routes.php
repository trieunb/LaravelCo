<?php

Route::group(['middleware' => ['admin'], 'module' => 'Admin', 'prefix' => 'admin', 'namespace' => 'App\Modules\Admin\Controllers'], function() {

    Route::get('/dashboard', 'DashboardController@index');

    // Route Category
    Route::get('category', 'CategoryController@index');
    Route::get('category/create', 'CategoryController@getCreate');
    Route::post('category/create', 'CategoryController@postCreate');
    Route::get('category/edit/{id}', 'CategoryController@getEdit');
    Route::post('category/edit', 'CategoryController@postEdit');
    Route::post('category/delete', 'CategoryController@postDelete');

    // Route Product
    Route::get('product', 'ProductController@index');
    Route::get('product/create', 'ProductController@getCreate');
    Route::post('product/create', 'ProductController@postCreate');
    Route::get('product/edit/{id}', 'ProductController@getEdit');
    Route::post('product/edit', 'ProductController@postEdit');
    Route::post('product/delete', 'ProductController@postDelete');

    // Route Job
    Route::get('job', 'JobController@index');
    Route::get('job/create', 'JobController@getCreate');
    Route::post('job/create', 'JobController@postCreate');
    Route::get('job/edit/{id}', 'JobController@getEdit');
    Route::post('job/edit', 'JobController@postEdit');
    Route::post('job/delete', 'JobController@postDelete');

    // Route Resume
    Route::get('resume', 'ResumeController@index');
    Route::get('resume/create', 'ResumeController@getCreate');
    Route::post('resume/create', 'ResumeController@postCreate');
    Route::get('resume/edit/{id}', 'ResumeController@getEdit');
    Route::post('resume/edit', 'ResumeController@postEdit');
    Route::post('resume/delete', 'ResumeController@postDelete');

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