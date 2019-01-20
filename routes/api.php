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

    Route::get('/search/{keyword}', 'customerController@searchHouse');
});

Route::group(['prefix' => 'order'], function () {

    Route::get('/', 'orderController@index');

    Route::post('/', 'orderController@store');
});

Route::group(['prefix' => 'customer'], function () {

    Route::post('/', 'customerController@storeRegister');
});
