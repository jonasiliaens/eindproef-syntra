<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Size;

class SizesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Size::create([
			'size'	=>	'XS'
		]);

		Size::create([
			'size'	=>	'S'
		]);

		Size::create([
			'size'	=>	'M'
		]);

		Size::create([
			'size'	=>	'L'
		]);

		Size::create([
			'size'	=>	'XL'
		]);

		Size::create([
			'size'	=>	'XXL'
		]);

	}

}
