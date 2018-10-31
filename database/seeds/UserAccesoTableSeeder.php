<?php

use App\UserAcceso;
use Illuminate\Database\Seeder;

class UserAccesoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAcceso::create([
            'user_id' => 1,
            'acceso_id' => 1,
        ]);
        UserAcceso::create([
            'user_id' => 2,
            'acceso_id' => 2,
        ]);
    }
}
