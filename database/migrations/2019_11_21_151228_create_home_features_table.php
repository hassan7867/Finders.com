<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('total_bedrooms');
            $table->string('total_bathrooms');
            $table->string('dining_room');
            $table->string('kitchen');
            $table->string('parking_space');
            $table->string('id_property');
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
        Schema::dropIfExists('home_features');
    }
}
