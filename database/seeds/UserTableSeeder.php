<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();

		User::create([
			'email'           => 'crash.master35@gmail.com',
			'password'        => bcrypt('huo0lpaw'),
			'name'            => 'Bruno Chavez',
            'user_profile_id' => 1,
		]);    
	}
}
