<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevaColumnaAvanceTablaTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks',function(Blueprint $table){
            $table->integer('progress')->unsigned()->default(0);
            $table->timestamps();
            $table->decimal('real_duration')->nullable()->change();
            $table->integer('category_id')->unsigned()->change();
            $table->integer('state_id')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks',function(Blueprint $table){
            $table->dropColumn('progress','updated_at','created_at');
        });
    }
}
