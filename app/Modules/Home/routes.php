<?php
$namespace = 'App\Modules\Home\Controllers';
Route::group(
    ['module' => 'Home', 'prefix' => 'home', 'namespace' => $namespace],
    function() {
    	Route::get('/', [
            'as' 	=> 'home.index',
            'uses' 	=> 'HomeController@index'
        ]);
    }
);