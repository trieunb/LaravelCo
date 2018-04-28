<?php

Route::group(['module' => 'Candidate', 'prefix' => 'candidate', 'namespace' => 'App\Modules\Candidate\Controllers'], function() {

    Route::get('/', 'CandidateController@index');

});