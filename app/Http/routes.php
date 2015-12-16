<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',["uses"=>"website@index"]);
Route::get('ejemplo',["uses"=>"website@ejemplo"]);

Route::group(["prefix"=>"demo"],function(){
    Route::get('/',function(){
        return "hola mundo";
    });

    Route::get('demo',function(){
        return "hola demo";
    });
});
