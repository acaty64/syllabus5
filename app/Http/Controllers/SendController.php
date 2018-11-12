<?php

namespace App\Http\Controllers;

use App\Acceso;
use App\Curso;
use App\CursoStatus;
use App\Grupo;
use App\Mail\Welcome;
use App\Send;
use App\User;
use App\UserAcceso;
use App\UserGrupo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Date\Date;

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

        $titulo_pagina = 'Comunicados Enviados';
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

            // Envia correo electrónico
            $responsable = $check->grupo->responsable;
            $flimite = $request->flimite;
            $fecha = new Date($flimite);

            $datos = [
                        'name' => $responsable->name,
                        'email' => $responsable->email,
                        'limite' => $fecha->format('l d-M-Y')
                    ];
            Mail::to( $datos['email'] , $datos['name'] ) 
                ->send(new Welcome($datos));

        }
        return redirect(route('send.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $flimite = Carbon::now()->addWeek();
        $fecha = new Date($flimite);

        $datos = [
                    'name' => 'John Doe',
                    'email' => 'jdoe@gmail.com',
                    'limite' => $fecha->format('l d-M-Y')
                ];
        return view('mail.welcome')
            ->with('datos', $datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = Send::findOrFail($id);
        if($send){
            $send->delete();
            flash('El envío ' . $id . ' ha sido eliminado con éxito.')->success();
        }else{
            flash('El envío ' . $id . ' no existe.')->danger();
        }
        return redirect()->route('send.index');
    }
}
