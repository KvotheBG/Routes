<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GasStation;
use App\Http\Requests\GasStationCreateRequest;
use App\Http\Requests\GasStationEditRequest;
use App\City;
use App\Road;
use Illuminate\Support\Arr;

class GasStationController extends Controller
{

    public function getCity($road, $get_city = NULL)
    {   
        if($road == 0){

            return response()->json(array(['city_id' => '0', 'name' => 'First pick road']));
        }

        if(isset($get_city)){
            $orderByCondition = $get_city;
        }
        else{
            $orderByCondition = "NULL";
            $blankCityArr = array('city_id' => '0', 'name' => 'Моля изберете подкатегория');
        }

        $getCity = Road::select('city_x', 'city_y')->where('id', $road)->get()->toArray();
        
        isset($blankCityArr) ? $getCity=Arr::prepend($getCity, $blankCityArr) : false;
        return response()->json($getCity);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gas_stations = GasStation::all();
        
        $cities = City::all();

        return view('gas_station.index', compact('gas_stations', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city_id = City::all();
        $plucked = $city_id->pluck('name', 'id');
        $road = Road::all();
        $road_id = $road->pluck('id', 'id');


        return view('gas_station.create', compact('plucked', 'road_id', 'city_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GasStationCreateRequest $request)
    {
        GasStation::create([
            'name'=> $request->gas_station_name,
            'city_id'=> $request->city,
            'distance_to_the_city'=> $request->distance_to_the_city,
            'road_id'=> $request->road,
            'diesel_price'=> $request->diesel_price,
            'gasoline_price'=> $request->gasoline_price,
            'gas_price'=> $request->gas_price,
            'electricity_price'=> $request->electricity_price,
            'metan_price'=> $request->metan_price,
        ]);

        return redirect()->route('gas_station.index')
            ->withMessage('Gas Station created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gas_station = GasStation::find($id);
        $city_id = $gas_station->city_id;
        $city = City::find($city_id);

        return view('gas_station.show', compact('gas_station', 'city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gas_station = GasStation::find($id);
        $city_id = $gas_station->city_id;
        $city = City::find($city_id);

        $cities = City::all();
        $plucked = $cities->pluck('name', 'id');
        $roads = Road::all();
        $road_id = $roads->pluck('id', 'id');


        return view('gas_station.edit', compact('gas_station', 'city', 'plucked', 'road_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GasStationEditRequest $request, $id)
    {
        $gas_station = GasStation::find($id);
        $gas_station->update([
                'name'=> $request->gas_station_name,
                'road_id'=> $request->road,
                'city_id'=> $request->city,
                'distance_to_the_city'=> $request->distance_to_the_city,
                'diesel_price'=> $request->diesel_price,
                'gasoline_price'=> $request->gasoline_price,
                'gas_price'=> $request->gas_price,
                'electricity_price'=> $request->electricity_price,
                'metan_price'=> $request->metan_price,
                 ]);

        return redirect()->route('gas_station.index')
            ->withMessage('Gas Station updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gas_station = GasStation::find($id);

        $gas_station->delete();
        return redirect()->route('gas_station.index')
                ->withMessage('Gas Station deleted!');
    }
}
