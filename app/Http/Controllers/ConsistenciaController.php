<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Send;
use Illuminate\Http\Request;

class ConsistenciaController extends Controller
{
    public function show($curso_id)
    {
    	$consistencia = Curso::find($curso_id)->consistencia_array;
    	return view('app.consistencia')
    			->with('data', $consistencia)
    			->with('titulo_pagina', 'Consistencia curso: ' . Curso::find($curso_id)->wcurso);
    }

}
