<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Send;
use Illuminate\Http\Request;

class ConsistenciaController extends Controller
{
    public function show($curso_id)
    {
    	$send = Send::first();
    	$consistencia = $send->consistencia($curso_id, 'array');
//dd($consistencia);
    	return view('app.consistencia')
    			->with('data', $consistencia)
    			->with('titulo_pagina', 'Consistencia curso: ' . Curso::find($curso_id)->wcurso);
    }
}
