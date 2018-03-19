<?php

use App\Titulo;
use Illuminate\Database\Seeder;

class TitulosTablesSeeder extends Seeder
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
			'texto' => 'I. DATOS GENERALES' 
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'sumillas', 
			'texto' => 'II. SUMILLA'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'competencias', 
			'texto' => 'III. SISTEMA DE COMPETENCIAS'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '2',
			'subtipo' => 'competencias', 
			'texto' => 'COMPETENCIAS GENERALES'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '2',
			'subtipo' => 'competencias', 
			'texto' => 'COMPETENCIAS ESPECÍFICAS'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'contenidos', 
			'texto' => 'IV. PROGRAMACIÓN DE CONTENIDOS'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'SEMANA'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'CONCEPTUAL' 
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'PROCEDIMENTAL'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '3',
			'subtipo' => 'contenidos', 
			'texto' => 'ACTIVIDAD DE APRENDIZAJE'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'estrategias', 
			'texto' => 'V. ESTRATEGIAS METODOLÓGICAS'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'evaluaciones', 
			'texto' => 'VI. EVALUACIÓN'
		]);

    	Titulo::create([
			'semestre' => '20181', 
			'cod_curso' => '100048', 
			'tipo' => '1',
			'subtipo' => 'bibliografia', 
			'texto' => 'VII. BIBLIOGRAFÍA'
		]);

    }
}
