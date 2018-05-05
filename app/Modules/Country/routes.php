<?php

Route::group(['module' => 'Country', 'prefix' => 'admin', 'namespace' => 'App\Modules\Country\Controllers'], function() {

    Route::get('/country/province', 'CountryController@indexProvince');
    Route::get('/country/district', 'CountryController@indexDistrict');
    Route::get('/country/ward', 'CountryController@indexWard');
    Route::get('/country/import-data', 'CountryController@indexWard');

});