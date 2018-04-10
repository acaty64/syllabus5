<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TitulosTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(GeneralesTableSeeder::class);
        $this->call(SumillasTableSeeder::class);
        $this->call(CompetenciasTableSeeder::class);
        $this->call(UnidadesTableSeeder::class);
    }
}
