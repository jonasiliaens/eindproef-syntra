<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Brand;

class BrandsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Brand::create([
			'brand'	=>	'Twins'
		]);

		Brand::create([
			'brand'	=>	'Windy'
		]);

		Brand::create([
			'brand'	=>	'Adidas'
		]);

		Brand::create([
			'brand'	=>	'Nike'
		]);
	}

}
