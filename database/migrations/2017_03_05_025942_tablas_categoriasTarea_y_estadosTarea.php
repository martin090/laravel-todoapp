<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablasCategoriasTareaYEstadosTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_Categories',function (Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->boolean('enabled');
        });

        Schema::create('task_States',function (Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->boolean('enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task_Categories');
        Schema::drop('task_States');
    }
}
