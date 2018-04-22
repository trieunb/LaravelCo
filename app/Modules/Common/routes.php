<?php

Route::group(['module' => 'Common', 'prefix' => 'common', 'namespace' => 'App\Modules\Common\Controllers'], function() {

    Route::get('/', 'CommonController@index');
    Route::post('upload', 'CommonController@postUploads');
    Route::post('upload-tinymce', 'CommonController@postUploadsTinymce');
});