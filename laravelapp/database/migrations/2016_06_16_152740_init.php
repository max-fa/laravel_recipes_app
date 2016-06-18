<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   Schema::create('categories',function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description');
	   });
	   
	   Schema::create('recipes',function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('ingredients');
			$table->string('instructions');
			$table->integer('cat_id')->unsigned();
			$table->integer('user_id')->unsigned();
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
        Schema::drop('categories');
        Schema::drop('recipes');
    }
}
