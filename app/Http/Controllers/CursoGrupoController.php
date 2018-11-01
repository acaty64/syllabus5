<?php

namespace App\Http\Controllers;

use App\CursoGrupo;
use App\Grupo;
use App\Send;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;

class CursoGrupoController extends Controller
{
    public function Index($cod_grupo)
    {
    	$cursos = CursoGrupo::where('cod_grupo', $cod_grupo)->get();
	    $user_id = Grupo::where('cod_grupo', $cod_grupo)->first()->responsable->id;
        /* Identificar Mensaje */
        $mensaje = ['texto'=>'El módulo de edición de syllabus NO está disponible.', 'color'=>'red'];
        if(Send::all()->count() > 0){
            Send::first()->check_today;
			$last_send = Send::where('user_id', $user_id)->get()->sortBy('date_send')->last();
			if(!is_null($last_send)){
				if($last_send->nstatus > 0){
                    $fechaC = Carbon::parse($last_send->date_answer);
                    $fecha = new Date($fechaC);
					$mensaje = ['texto'=>'El módulo de edición de syllabus está disponible hasta el día '.  $fecha->format('l d-m-Y'), 'color'=>'green'];
				}
			}
    	}
    	return view('app.cursoGrupo')
                ->with('data', $cursos)
                ->with('titulo_pagina', 'Cursos de Grupo: ' . $cod_grupo)
                ->with('mensaje', $mensaje);
    }
}
