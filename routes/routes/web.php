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
<<<<<<< Updated upstream
Route::get('/manage', 'ManageController@index')->name('manage');

Route::resource('city', 'CityController');
Route::resource('gas_station', 'GasStationController');
=======
Route::post('/map/get_fuel', 'MapController@get_fuel')->name('get_fuel');
>>>>>>> Stashed changes

