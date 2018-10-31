<?php

namespace App\Http\Controllers;

use App\Acceso;
use App\Curso;
use App\CursoStatus;
use App\Grupo;
use App\Send;
use App\User;
use App\UserAcceso;
use App\UserGrupo;
use Illuminate\Http\Request;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Send::all()->count()>0){
            Send::first()->check_today;
        }
        $sends = Send::all()->sortBy('date_send');
        /* Por cada envio */
            /* Datos del receptor */
            /* Grupo del receptor */
            /* Cursos del grupo */
            /* Status del curso */

        $titulo_pagina = 'Comunicados Enviados y por Enviar';
        return view('app.sends.index')
            ->with('data', $sends)
            ->with('titulo_pagina', $titulo_pagina);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = UserGrupo::where('semestre', env("SEMESTRE"))->get();
        return view('app.sends.create')
            ->with('data', $grupos)
            ->with('titulo_pagina', 'Crear Nuevo Comunicado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_array = [];
        $users = UserGrupo::where('semestre', env("SEMESTRE"))->get();
        foreach ($users as $key => $value) {
            $clave = "userGrupo_" . $value->grupo_id;
            if(!is_null($request->$clave)){
                array_push($check_array, $value);
            }
        }
        foreach ($check_array as $check) {
            $cursos = $check->grupo->cursos;
            foreach ($cursos as $item) {
                $curso = Curso::where('cod_curso', $item->cod_curso)->first();
                $grupo = Grupo::where('cod_grupo', $item->cod_grupo)->first();
                $chk = CursoStatus::where('curso_id',$curso->id)->first();
                if(!$chk){
                    CursoStatus::create([
                            'semestre'  => env("SEMESTRE"),
                            'curso_id'  => $curso->id,
                            'grupo_id'  => $grupo->id,
                            'open'    => true
                        ]);
                }else{
                    $chk->open = true;
                    $chk->save();
                }                
            }
            $ncursos = $grupo->ncursos;
            $nchecks = $grupo->nchecks;
            $nopen = $grupo->nopen;
            // Crea Send
            Send::create([
                        'user_id' => $check->user_id,
                        'date_send'=>\Carbon\Carbon::now(),
                        'date_answer' => $request->flimite,
                        'texto' =>'Acceso a módulo Syllabus',
                        'ncursos' => $ncursos,
                        'ncheck' => $nchecks,
                        'nstatus' => $nopen,

                ]);
        }
        return redirect(route('send.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
