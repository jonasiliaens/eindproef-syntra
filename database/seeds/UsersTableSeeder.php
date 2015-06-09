<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name'		=>	'Admin',
			'email'		=>	'admin@ank.be',
			'user_type'	=>	0,
			'password'	=>	Hash::make('paswoord')
		]);

	}

}
