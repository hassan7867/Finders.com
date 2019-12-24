<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plot_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_property');
            $table->string('corner')->default(0);
            $table->string('park_facing')->default(0);
            $table->string('electricity')->default(0);
            $table->string('water_supply')->default(0);
            $table->string('sui_gas')->default(0);
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
        Schema::dropIfExists('plot_features');
    }
}
