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
        $roads = Road::all();
        $cities = City::all();

        //counting the roads and cities
        $count_roads = count($roads);
        $count_cities = count($cities);

        //set the distance array
        $_distArr = array();

        $ee = 1;
        for ($i=1; $i <= ($count_roads*2); $i++) { 
            
            if ($i <= $count_roads) {
               $_distArr[$roads[$i-1]->city_x_id][$roads[$i-1]->city_y_id]=$roads[$i-1]->distance_km;
            }else{
                $_distArr[$roads[$ee-1]->city_y_id][$roads[$ee-1]->city_x_id]=$roads[$ee-1]->distance_km;
                $ee++;
            }
        }
        // dd($_distArr);
        //the start and the end
        $a = $city_x;
        $b = $city_y;

        //initialize the array for storing
        $S = array();//the nearest path with its parent and weight
        $Q = array();//the left nodes without the nearest path
        foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
        $Q[$a] = 0;

        //start calculating
        while(!empty($Q)){
            $min = array_search(min($Q), $Q);//the most min weight
            if($min == $b) break;
            foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
                $Q[$key] = $Q[$min] + $val;
                $S[$key] = array($min, $Q[$key]);
            }
            unset($Q[$min]);
        }

        //list the path
        $path = array();
        $pos = $b;
        while($pos != $a){
            $path[] = $pos;
            $pos = $S[$pos][0];
        }
        $path[] = $a;
        $path = array_reverse($path);
        $length = $S[$b][1];
        // dd($length);
        // dd($path);
        //print result
        // echo "<img src='http://www.you4be.com/dijkstra_algorithm.png'>";
        // echo "<br />From $a to $b";
        // echo "<br />The length is ".$S[$b][1];
        // echo "<br />Path is ".implode('->', $path);

    	return view('map.result', compact('city_y','city_x', 'path', 'length'));
    }

}
