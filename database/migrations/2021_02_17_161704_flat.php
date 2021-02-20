<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Flat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('flat', function (Blueprint $table) {
          $table->increments('id');
          $table->string('landmark');
          $table->string('street');
          $table->integer('number');
          $table->integer('numberFlat');
          $table->integer('floors');
          $table->string('typeHouse');
          $table->integer('rooms');
          $table->integer('square');
          $table->integer('livingSquare');
          $table->integer('kitchen');
          $table->string('layout');
          $table->string('balcony');
          $table->string('conditions');
          $table->integer('price');
          $table->string('agent');
          $table->string('sellers_name');
          $table->string('phone');
          $table->timestamps();
          $table->text('description');
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
        Schema::dropIfExists('flat');
    }
}
