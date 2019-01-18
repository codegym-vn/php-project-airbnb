<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'house/admin'], function () {
    Route::get('/', 'houseController@index')->name('house.index');
    Route::get('/create', 'houseController@create')->name('house.create');
    Route::post('/create', 'houseController@store')->name('house.store');
    Route::get('/show/{id}', 'houseController@show')->name('house.show');
    Route::get('/edit/{id}', 'houseController@edit')->name('house.edit');
    Route::post('/edit/{id}', 'houseController@update')->name('house.update');
    Route::get('/delete/{id}', 'houseController@destroy')->name('house.destroy');
    Route::get('/search', 'houseController@search')->name('house.search');
});
Route::get('/changePassword', 'Auth\ChangePasswordController@index')->name('changePassword.index');
Route::post('/changePassword', 'Auth\ChangePasswordController@store')->name('changePassword.store');
