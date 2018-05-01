<?php

Route::group(['module' => 'Auth', 'prefix' => 'admin', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'AdminController@index');
    Route::post('do-login', 'AdminController@postLogin');
    Route::get('logout', 'AdminController@getLogout');
});

Route::group(['module' => 'Auth', 'prefix' => 'candidate', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'CandidateController@index');
    Route::post('do-login', 'CandidateController@postLogin');
    Route::get('logout', 'CandidateController@getLogout');
});

Route::group(['module' => 'Auth', 'prefix' => 'employer', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'EmployerController@index');
    Route::post('do-login', 'EmployerController@postLogin');
    Route::get('logout', 'EmployerController@getLogout');
});