<?php

Route::group(['module' => 'Country', 'prefix' => 'country', 'namespace' => 'App\Modules\Country\Controllers'], function() {

    Route::get('/', 'CountryController@index');

});