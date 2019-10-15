<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_station', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('city_id');
            $table->integer('distance_to_the_city');
            $table->integer('road_id');
            $table->integer('disel_price');
            $table->integer('gasoline_price');
            $table->integer('gas_price');
            $table->integer('electricity_price');
            $table->integer('metan_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gas_stations');
    }
}
