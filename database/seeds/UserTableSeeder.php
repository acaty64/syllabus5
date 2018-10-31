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
            'email' => 'master@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        User::create([
            'name' => 'Administrador del Modulo',
            'email' => 'ucss.fcec.lim@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
