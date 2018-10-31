<?php

namespace App\Http\Controllers;

use App\CursoGrupo;
use App\Send;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoGrupoController extends Controller
{
    public function Index($cod_grupo)
    {
    	$cursos = CursoGrupo::where('cod_grupo', $cod_grupo)->get();
    	/* Identificar Mensaje */
		$mensaje = 'El módulo de edición de syllabus NO está disponible.';
    	if(Send::all()->count() > 0){	
	    	Send::first()->check_today;
	    	$user_id = Auth::id();
			$last_send = Send::where('user_id', $user_id)->get()->sortBy('date_send')->last();
			if(!is_null($last_send)){
				if($last_send->nstatus > 0){
					$mensaje = 'El módulo de edición de syllabus está disponible hasta el día '. $last_send->date_answer;
				}
			}
    	}
    	return view('app.cursoGrupo')
                ->with('data', $cursos)
                ->with('titulo_pagina', 'Cursos de Grupo: ' . $cod_grupo)
                ->with('mensaje', $mensaje);
    }
}
