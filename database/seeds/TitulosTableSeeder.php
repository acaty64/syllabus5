<?php

use App\Titulo;
use Illuminate\Database\Seeder;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'generales', 
			'texto' => 'I. DATOS GENERALES',
			'orden' => 1,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'sumillas', 
			'texto' => 'II. SUMILLA',
			'orden' => 2,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'competencias', 
			'texto' => 'III. SISTEMA DE COMPETENCIAS',
			'orden' => 3,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '2',
			'subtipo' => 'competencias', 
			'texto' => 'COMPETENCIAS GENERALES',
			'orden' => 4,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '2',
			'subtipo' => 'competencias', 
			'texto' => 'COMPETENCIAS ESPECÍFICAS',
			'orden' => 5,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'contenidos', 
			'texto' => 'IV. PROGRAMACIÓN DE CONTENIDOS',
			'orden' => 6,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'SEMANA',
			'orden' => 7,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'CONCEPTUAL' ,
			'orden' => 8,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'PROCEDIMENTAL',
			'orden' => 9,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'ACTIVIDAD DE APRENDIZAJE',
			'orden' => 10,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'estrategias', 
			'texto' => 'V. ESTRATEGIAS METODOLÓGICAS',
			'orden' => 11,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'evaluaciones', 
			'texto' => 'VI. EVALUACIÓN',
			'orden' => 12,
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'bibliografia', 
			'texto' => 'VII. BIBLIOGRAFÍA',
			'orden' => 13,
		]);

    }
}
