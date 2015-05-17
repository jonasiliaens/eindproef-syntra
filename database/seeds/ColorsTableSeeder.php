<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Color;

class ColorsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Color::create([
			'color'	=>	'Wit'
		]);

		Color::create([
			'color'	=>	'Zwart'
		]);

		Color::create([
			'color'	=>	'Blauw'
		]);

		Color::create([
			'color'	=>	'Roze'
		]);

		Color::create([
			'color'	=>	'Bruin'
		]);

		Color::create([
			'color'	=>	'Groen'
		]);

	}

}
