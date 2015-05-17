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
			'email'		=>	'jonas_iliaens@icloud.com',
			'user_type'	=>	0,
			'password'	=>	Hash::make('paswoord')
		]);

	}

}
