<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoadType extends Model
{
    protected $fillable = [
    	'type_name', 'delay_factor'
    ];
}
