<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_property');
            $table->string('purpose');
            $table->string('property_type');
            $table->string('country');
            $table->string('city');
            $table->string('location');
            $table->string('title');
            $table->string('description');
            $table->string('price');
            $table->string('land_area');
            $table->string('unit');
            $table->string('expires_after');
            $table->string('id_user');
            $table->string('date_posting');
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
        Schema::dropIfExists('properties');
    }
}