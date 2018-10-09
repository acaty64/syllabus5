<?php

use App\Estrategia;
use Illuminate\Database\Seeder;

class EstrategiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estrategia::create([
			'semestre' => '20191', 
			'cod_curso' => '100048', 
			'texto' => 'Lecturas
Los materiales asignados previamente deberán ser leídos para el desarrollo de cada sesión de los cuales se tomarán evaluaciones permanentes en cada sesión. Es importante leer los materiales asignados, de manera que se pueda complementar el tratamiento de los mismos en clase.
Participación en clase
La participación en clase es de primera importancia en el curso, la participación incluye no solamente los aportes referidos al tema a tratar, sino las preguntas que surgieran con referencia a él.
Trabajo grupal
En particular, se deberán conformar equipos de trabajo de seis integrantes (como máximo por equipo).',
			'orden' => 1,
		]);
    }
}
