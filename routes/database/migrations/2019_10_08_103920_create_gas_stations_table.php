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
        Schema::create('gas_stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('city_id');
            $table->decimal('distance_to_the_city', 4, 2);
            $table->decimal('road_id', 4, 2);
            $table->decimal('disel_price', 4, 2);
            $table->decimal('gasoline_price', 4, 2);
            $table->decimal('gas_price', 4, 2);
            $table->decimal('electricity_price', 4, 2);
            $table->decimal('metan_price', 4, 2);
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
