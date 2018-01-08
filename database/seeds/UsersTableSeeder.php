<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
			'name' => 'lola muiz',
			'email' => 'lola@muiz.com',
			'password' => bcrypt('password'),
			'admin' => 1
		 
		]);
		
		App\Profile::create([
			'user_id' => $user->id,
			'avatar' => '/uploads/avatars/ava1.jpg',
			'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
			'facebook' => 'facebook.com',
			'youtube' => 'youtube.com'
		]);
    }
}
