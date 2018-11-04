<?php

namespace App\Http\Controllers;

use App\Acceso;
use App\UserAcceso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccesoController extends Controller
{
/*
    public function redirect()
    {
        $user_id = Auth::id();
        $acceso = UserAcceso::where('user_id', $user_id)->first(); 
        switch ($acceso->acceso->cod_acceso) {
            case 'master':
                return redirect('grupos');
                break;
            case 'adm':
                return redirect('grupos');
                break;
            case 'resp':
                $grupo = 'ADM';
                return redirect('cursogrupo/'.$grupo);
                break;
            default:
                break;
        }
        
    }
            	/************************/
            	/************************/

}
