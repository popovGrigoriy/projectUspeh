<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandPlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('land_plots', function (Blueprint $table) {
          $table->increments('id');
          $table->string('landmark');
          $table->string('street');
          $table->integer('number');
          $table->string('conditions');
          $table->integer('size');
          $table->string('percentage');
          $table->integer('facade');
          $table->string('gas');
          $table->string('sewerage');
          $table->integer('slope');
          $table->text('description');
          $table->integer('price');
          $table->string('agent');
          $table->string('sellers_name');
          $table->string('phone');
          $table->timestamps();
          $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_plots');
    }
}
