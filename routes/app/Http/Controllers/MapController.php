<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Road;

class MapController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
    public function index() {
    	$cities = City::all();
        $cities_arr = $cities->pluck('name', 'id');
    	return view('map.index', compact('cities_arr'));
    }

    public function calcTime(Request $request)
    {
    	$city_x = $request['city_x'];
        $city_y = $request['city_y'];
        $routes = Road::all();
        
        dd($routes);
        var_dump($city_x);
        var_dump($city_y);

    	return view('map.result', compact('city_y','city_x'));
    }

}
