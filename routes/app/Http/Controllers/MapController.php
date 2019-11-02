<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Road;
<<<<<<< Updated upstream
use App\GasStation;
=======
use DB;
>>>>>>> Stashed changes

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

    public function get_fuel() {
        return view('map.get_fuel');
    }

    public function calcTime(Request $request)
    {
    	$city_x = $request['city_x'];
        $city_y = $request['city_y'];
        $roads = Road::all();
        $cities = City::all();
        $gas_stations = GasStation::all();

        //counting the roads and cities
        $count_roads = count($roads);
        $count_cities = count($cities);
        $count_gas_stations = count($gas_stations);

        //set the distance array
        $timeArr = array();
        $roadsArr = array();

        $ee = 1;
        for ($i=1; $i <= ($count_roads*2); $i++) { 
            
            if ($i <= $count_roads) {
               $timeArr[$roads[$i-1]->city_x_id][$roads[$i-1]->city_y_id]=(($roads[$i-1]->distance_km)/($roads[$i-1]->speed_limit)*60);
               $roadsArr[$roads[$i-1]->city_x_id][$roads[$i-1]->city_y_id]=$roads[$i-1]->id;
            }else{
                $timeArr[$roads[$ee-1]->city_y_id][$roads[$ee-1]->city_x_id]=(($roads[$ee-1]->distance_km)/($roads[$ee-1]->speed_limit)*60);
                $roadsArr[$roads[$ee-1]->city_y_id][$roads[$ee-1]->city_x_id]=$roads[$ee-1]->id;
                $ee++;
            }
        }

        //the start and the end
        $a = $city_x;
        $b = $city_y;

        //initialize the array for storing
        $S = array();//the nearest paths with its parent and weight
        $Q = array();//the left nodes without the nearest paths
        foreach(array_keys($timeArr) as $val)
            $Q[$val] = 99999;
            $Q[$a] = 0;

        //start calculating
        while(!empty($Q)){
            $min = array_search(min($Q), $Q);//the most min weight
            if($min == $b) break;
            foreach($timeArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
                $Q[$key] = $Q[$min] + $val;
                $S[$key] = array($min, $Q[$key]);
            }
            unset($Q[$min]);
        }
        
        //list the paths
        $paths = array();
        $pos = $b;
        while($pos != $a){
            $paths[] = $pos;
            $pos = $S[$pos][0];

        }
        
        $paths[] = $a;
        $paths = array_reverse($paths);
<<<<<<< Updated upstream

        //length in min
        $length = floor($S[$b][1]);

        // This is the path Array fill with the roads
        $find_roads = [];
        
        for ($i=0; $i < (count($paths)-1); $i++) { 
            
            for ($j=0; $j < $count_roads; $j++) { 
                if ($paths[$i] == ($roads[$j]->city_y_id) && $paths[$i+1] == ($roads[$j]->city_x_id)) {
                    $find_roads[$i] = $roads[$j]->id;    
                }
                if ($paths[$i] == ($roads[$j]->city_x_id) && $paths[$i+1] == ($roads[$j]->city_y_id)) {
                    $find_roads[$i] = $roads[$j]->id;   
                }
            }
        }   

        // Finding the gas stations in $paths and $find_roads
        $start = 0;
        $find_gas_stations = [];
        $find_roads [count($find_roads)]= 0;

        for ($i=0; $i < count($paths); $i++) { 
            for ($j=0; $j < $count_gas_stations; $j++) { 
                if (($paths[$i] == $gas_stations[$j]->city_id && ($gas_stations[$j]->road_id == 1)) ) {
                   $find_gas_stations[$start] = $gas_stations[$j]->id;
                   $start++;
                }
                if ($find_roads[$i] == $gas_stations[$j]->road_id) {
                    $find_gas_stations[$start] = $gas_stations[$j]->id;
                    $start++;
                }
            }
        }

    	return view('map.result', compact('city_y','city_x', 'paths', 'length', 'cities', 'find_roads', 'roads', 'find_gas_stations', 'gas_stations'));
=======
        $time = $S[$b][1];

        for ($i = 0; $i < count($paths); $i++) {
            $paths[$i] = intval($paths[$i]);
        }
        
    	return view('map.result', compact('paths', 'time', 'cities'));
>>>>>>> Stashed changes
    }

}
