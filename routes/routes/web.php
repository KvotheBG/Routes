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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/map', 'MapController@index')->name('map');
Route::get('/map/result', 'MapController@calcTime')->name('calcTime');

Route::resource('cities', 'CityController', ['except' => ['show']]);
Route::resource('road_types', 'RoadTypeController');
Route::resource('roads', 'RoadController');
Route::resource('gas_stations', 'GasStationController', ['except' => ['show']]);
