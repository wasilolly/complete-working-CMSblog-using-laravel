<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
			'site_name' => 'A Blog',
			'address' => 'Somewhere, Anywhere',
			'contact_number' => '05864423',
			'contact_email' => 'info@blog.com'
		
		
		]);
    }
}
