<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Master del Modulo',
    		'email' => 'master@ucss.edu.pe',
    		'password' => bcrypt('123456'),
    	]);
    }
}
