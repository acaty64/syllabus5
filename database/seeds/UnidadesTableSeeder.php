<?php

use App\Unidad;
use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidad::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'semana' => 1,
			'texto' => 'LA CONTABILIDAD GERENCIAL.',
			'logro' => '',
			'orden' => 1,
		]);
		Unidad::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'semana' => 6,
			'texto' => 'ANALISIS E INTERPRETACION DE LOS ESTADOS FINANCIEROS.',
			'logro' => '',
			'orden' => 2,
		]);

    }
}
