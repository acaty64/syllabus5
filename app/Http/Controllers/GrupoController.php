<?php

namespace App\Http\Controllers;

use App\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        return view('app.grupos')
                ->with('data', $grupos);
    }

}
