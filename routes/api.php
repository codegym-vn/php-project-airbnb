<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'house'], function () {

    Route::get('/', 'customerController@indexHouse');

    Route::get('/{id}', 'customerController@showHouse');
});

Route::get('/user', 'userController@index');

Route::get('/{id}/user', 'userController@show');

Route::post('/user', 'userController@order');

Route::get('/customer', 'customerController@index');

Route::get('/{id}/customer', 'customerController@show');

Route::post('/customer', 'customerController@customer');
