<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasStation extends Model
{
    protected $fillable = ['name', 'disel_price', 'gasoline_price', 'gas_price', 'electricity_price', 'metan_price'];
}
