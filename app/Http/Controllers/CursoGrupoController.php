<?php

namespace App\Http\Controllers;

use App\CursoGrupo;
use Illuminate\Http\Request;

class CursoGrupoController extends Controller
{
    public function Index($cod_grupo)
    {
    	$cursos = CursoGrupo::where('cod_grupo', $cod_grupo)->get();
    	return view('app.cursoGrupo')
                ->with('data', $cursos);
    }
}
