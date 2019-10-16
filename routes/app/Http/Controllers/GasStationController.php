<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GasStation;
use App\Http\Requests\GasStationCreateRequest;
use App\Http\Requests\GasStationEditRequest;
use App\City;
use App\Road;

class GasStationController extends Controller
{
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
        $road_id = $road->pluck('id');

        return view('gas_station.create', compact('plucked', 'road_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GasStationCreateRequest $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
