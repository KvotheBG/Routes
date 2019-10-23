<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'name', 'speed_limit', 'distance'
    ];

    public function roads()
    {
    	return $this->hasMany('App\Road');
    }

    public function gasStations()
    {
    	return $this->hasMany('App\GasStation');
    }
}
