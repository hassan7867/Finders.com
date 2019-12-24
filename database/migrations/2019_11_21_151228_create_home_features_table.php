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
            $table->string('bedrooms')->default(0);
            $table->string('bathrooms')->default(0);
            $table->string('kitchens')->default(0);
            $table->string('storerooms')->default(0);
            $table->string('home_parking_space')->default(0);
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
