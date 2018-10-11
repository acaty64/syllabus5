<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    protected $casts = [
        'published' => 'boolean',
		'accesos' 	=> 'boolean',
		'generales' 	=> 'boolean',
		'titulos' 	=> 'boolean',
		'competencias' 	=> 'boolean',
		'contenidos' 	=> 'boolean',
		'sumillas' 	=> 'boolean',
		'estrategias' 	=> 'boolean',
		'evaluaciones' 	=> 'boolean',
		'bibliografias' 	=> 'boolean',
		'unidades' 	=> 'boolean',
		'cursos' 	=> 'boolean',
		'mallas' 	=> 'boolean',
		'mcursos' 	=> 'boolean',
		'prereqs' 	=> 'boolean',
		'grupos' 	=> 'boolean',
		'curso_grupos' 	=> 'boolean',
		'curso_competencia' 	=> 'boolean',
    ];
}
