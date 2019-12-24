<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_property');
            $table->string('built_in_year')->nullable();
            $table->string('rooms')->default(0);
            $table->string('floors')->default(0);
            $table->string('elevator')->default(0);
            $table->string('commercial_parking_space')->default(0);
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
        Schema::dropIfExists('commercial_features');
    }
}
