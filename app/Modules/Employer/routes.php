<?php

Route::group(['module' => 'Employer', 'prefix' => 'employer', 'namespace' => 'App\Modules\Employer\Controllers'], function() {

    Route::get('/', 'EmployerController@index');

});