<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Masoud Hosseiny (-'],
            ['name' => 'site_title', 'value' => 'Masoud Hosseiny (-'],
            ['name' => 'copyright_owner', 'value' => 'Masoud Hosseiny (-'],
            ['name' => 'admin_email', 'value' => 'masoudhosseiny@gmail.com'],
        ]);
    }
}
