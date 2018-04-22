<?php
$namespace = 'App\Modules\Admin\Controllers';
Route::group(
    ['module' => 'Admin', 'prefix' => 'admin', 'namespace' => $namespace],
    function() {
    	Route::get('login', 'LoginController@index');
        Route::post('do-login', 'LoginController@postLogin');
        Route::get('dashboard', 'DashboardController@index');
        // Route::get('user', 'UserController@index');
        Route::post('user/user-create', 'UserController@postCreateUser');
        //router NewsController
        Route::get('tin-ban-dat', 'NewsController@getIndexBDS');
        //create new
        Route::get('tin-ban-dat/tao-moi', 'NewsController@getIndexTaoMoi');
        Route::post('tin-ban-dat/tao-moi', 'NewsController@postCreateNewBDS');
        //edit
        Route::get('tin-ban-dat/chinh-sua/{id}', 'NewsController@getEdit');
        Route::post('tin-ban-dat/chinh-sua', 'NewsController@postEdit');
        //list 
        Route::get('tin-tuc/tao-moi', 'NewsController@index');
        Route::post('tin-tuc/tao-moi', 'NewsController@postCreateNew');
        
        Route::post('upload', 'NewsController@postUploads');
        //router TestController
        Route::get('test', 'TestController@getIndexBDS');
        
        Route::get('test/tao-moi', 'TestController@index');
        Route::post('test/tao-moi', 'TestController@postCreateNew');
        //edit
        Route::get('test/chinh-sua/{id}', 'TestController@getEdit');
        Route::post('test/chinh-sua', 'TestController@postEdit');
        Route::post('upload', 'TestController@postUploads');
    }
);