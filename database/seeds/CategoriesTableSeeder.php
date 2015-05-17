<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Category::create([
			'category'	=>	'Bescherming'
		]);

		Category::create([
			'category'	=>	'Bokshandschoenen'
		]);

		Category::create([
			'category'	=>	'Kledij'
		]);

		Category::create([
			'category'	=>	'Scheenbeschermers'
		]);
	}

}
