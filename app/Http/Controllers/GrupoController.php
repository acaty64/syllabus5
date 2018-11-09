<?php

namespace App\Http\Controllers;
 
use App\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index($type)
    {
        switch ($type) {
            case 'show':
                $titulo = 'Visualización o Edición de Syllabus';
                break;          
            case 'download':
                $titulo = 'Descarga de Syllabus por Grupo Temático';
                break;
            default:
                # code...
                break;
        }
        $grupos = Grupo::all();
        return view('app.grupos')
                ->with('data', $grupos)
                ->with('type', $type)
                ->with('titulo_pagina', $titulo);
    }

}
