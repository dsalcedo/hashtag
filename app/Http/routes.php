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

Route::group(['prefix' => 'provider'], function () {

    Route::group(['prefix' => 'twitter'], function () {
        Route::get('/', [
            'as'   => 'provider.twitter.redirectToProvider',
            'uses' => 'Auth\AuthTwitterController@redirectToProvider'
        ]);
        Route::get('callback', [
            'as'   => 'provider.twitter.callback',
            'uses' => 'Auth\AuthTwitterController@handleProviderCallback'
        ]);
        Route::get('error', [
            'as'   => 'provider.twitter.error',
            'uses' => 'Auth\AuthTwitterController@providerError'
        ]);

    });
});
