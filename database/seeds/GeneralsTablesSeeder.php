<?php

use App\General;
use Illuminate\Database\Seeder;

class GeneralsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	General::create([
			'semestre' => '20181', 
			'cod_curso' => '100048',
            'wcurso' => 'CONTABILIDAD GERENCIAL'
			'prerequisito' => 'Contabilidad General',
			'creditos' => '4',
			'horas' => '4 ht',
			'ciclo' => 'III'
		]);
    }
}
