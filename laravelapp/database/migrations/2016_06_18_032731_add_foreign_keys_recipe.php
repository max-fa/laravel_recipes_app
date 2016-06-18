<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes',function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('cat_id')->references('id')->on('categories');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes',function(Blueprint $table) {
			$table->dropForeign(['user_id']);
			$table->dropForeign(['cat_id']);
		});
    }
}
