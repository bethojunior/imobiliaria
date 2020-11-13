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
            $table->id();
            $table->integer('acquisition_id');
            $table->integer('model_id');
            $table->integer('city_id');
            $table->integer('neighborhood_id');
            $table->longText('description');
            $table->longText('title');
            $table->longText('sub_title');
            $table->longText('address');
            $table->longText('location');
            $table->string('value');
            $table->string('value_additional');
            $table->string('status');
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
