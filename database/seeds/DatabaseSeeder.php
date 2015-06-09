<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoriesTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('MaterialsTableSeeder');
		$this->call('SizesTableSeeder');
		$this->call('ColorsTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
