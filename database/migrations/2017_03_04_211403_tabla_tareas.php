<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table){
            $table->increments('id');
            $table->string('description');
            $table->date('initial_date');
            $table->date('end_date');
            $table->decimal('days_estimated');
            $table->integer('priority')->unsigned();
            $table->decimal('real_duration');
            $table->integer('category_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('task_Categories');
            $table->foreign('state_id')->references('id')->on('task_States');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
