<?php

use App\General;
use Illuminate\Database\Seeder;

class GeneralesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        General::create([
            'semestre' => '20191', 
            'texto' => 'Código: ',
            'modelo' => 'request',
            'campo' => 'cod_curso',
            'orden' => 1,
        ]);
        General::create([
            'semestre' => '20191', 
            'texto' => 'Pre-requisito: ',
            'modelo' => 'curso',
            'campo' => 'wprereq',
            'orden' => 2,
        ]);
        General::create([
            'semestre' => '20191', 
            'texto' => 'Créditos: ',
            'modelo' => 'curso',
            'campo' => 'creditos',
            'orden' => 3,
        ]);
        General::create([
            'semestre' => '20191', 
            'texto' => 'Horas: ',
            'modelo' => 'curso',
            'campo' => 'texto_horas',
            'orden' => 4,
        ]);
        General::create([
            'semestre' => '20191', 
            'texto' => 'Semestre Académico: ',
            'modelo' => 'request',
            'campo' => 'semestre',
            'orden' => 5,
        ]);
    	General::create([
			'semestre' => '20191', 
            'texto' => 'Ciclo: ',
			'modelo' => 'curso',
			'campo' => 'ciclo_romano',
			'orden' => 6,
		]);
    }
}
