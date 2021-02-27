<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('houses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('landmark');
          $table->string('street');
          $table->integer('number');
          $table->string('conditions');
          $table->integer('size');
          $table->integer('year');
          $table->string('percentage');
          $table->integer('square');
          $table->integer('livingSquare');
          $table->integer('kitchen');
          $table->integer('rooms');
          $table->string('wall');
          $table->string('roof');
          $table->integer('floors');
          $table->string('yard');
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
        Schema::dropIfExists('houses');
    }
}
