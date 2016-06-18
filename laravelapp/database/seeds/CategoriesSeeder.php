<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			'name'=>'meat',
			'description'=>'Recipes consisting solely of,or revolving around,meat.'
		]);
		
		DB::table('categories')->insert([
			'name'=>'bread',
			'description'=>'Recipes consisting solely of,or revolving around,bread,such as pies or loaves.'
		]);
		
		DB::table('categories')->insert([
			'name'=>'veggies',
			'description'=>'Recipes consisting solely of,or revolving around,veggies.'
		]);
    }
}
