<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $fillable = [
    	'city_x', 'city_y', 'road_type_id', 'speed_limit', 'distance_km'
    ];

    public function cities()
    {
    	return $this->hasMany('App\City');
    }

    public function gasStations()
    {
    	return $this->hasMany('App\GasStation');
    }
}
