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
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->decimal('distance_to_city', 4, 2);
            $table->decimal('road_id', 4, 2);
            $table->decimal('disel_price', 4, 2)->nullable();
            $table->decimal('gasoline_price', 4, 2)->nullable();
            $table->decimal('gas_price', 4, 2)->nullable();
            $table->decimal('electricity_price', 4, 2)->nullable();
            $table->decimal('metan_price', 4, 2)->nullable();
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
