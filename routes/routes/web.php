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


Route::get('/admin', 'AdminController@index')->name('adminPanel');
Route::resource('city', 'CityController');
Route::resource('gas_station', 'GasStationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
