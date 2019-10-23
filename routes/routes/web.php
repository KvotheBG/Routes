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
Route::get('/', function () {
    return view('home');
});
Route::get('/unauthorized', function () {
    return view('unauthorized');
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/map', 'MapController@index')->name('map');
Route::get('/manage', 'ManageController@index');
Route::resource('city', 'CityController');
Route::resource('gas_station', 'GasStationController');
Route::get('/get/city/{road}/{get_city}', 'GasStationController@getCity' )->name('get.city');