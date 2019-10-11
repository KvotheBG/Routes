<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $fillable = ['city_x', 'city_y', 'speed_limit', 'distance_km'];
}
