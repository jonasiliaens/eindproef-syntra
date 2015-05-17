<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Material;

class MaterialsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Material::create([
			'material'	=>	'Leer'
		]);

		Material::create([
			'material'	=>	'Katoen'
		]);

		Material::create([
			'material'	=>	'Kunstleer'
		]);

		Material::create([
			'material'	=>	'Kunststof'
		]);
	}

}
