<?php
// Admin Routes
Route::group(['module' => 'Auth', 'prefix' => 'admin', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'AdminController@index');
    Route::post('do-login', 'AdminController@postLogin');
    Route::get('logout', 'AdminController@getLogout');
});
// Candidate Routes
Route::group(['module' => 'Auth', 'prefix' => 'candidate', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'CandidateController@index');
    Route::post('do-login', 'CandidateController@postLogin');
    Route::get('logout', 'CandidateController@getLogout');
});
// Employer Routes
Route::group(['module' => 'Auth', 'prefix' => 'employer', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
    Route::get('/login', 'EmployerController@index');
    Route::post('do-login', 'EmployerController@postLogin');
    Route::get('logout', 'EmployerController@getLogout');
});
// Social Routes
Route::group(['middleware' => ['web'], 'module' => 'Auth', 'namespace' => 'App\Modules\Auth\Controllers'], function() {
	Route::get('auth/{provider}', 'SocialAuthController@redirectToProvider');
	Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');
});