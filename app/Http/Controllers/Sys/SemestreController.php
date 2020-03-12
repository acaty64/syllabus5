<?php

namespace App\Http\Controllers\Sys;

use App\Bibliografia;
use App\Contenido;
use App\Estrategia;
use App\Evaluacion;
use App\General;
use App\Http\Controllers\Controller;
use App\Responsable;
use App\Unidad;
use App\UserGrupo;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function correccion()
    {
        $semestre_old = '20192';
        $new_semestre = '20201';
        $despues = UserGrupo::where('semestre', $new_semestre)->get();
        foreach ($despues as $registro) {
            $registro->delete();
        }

        $antes = UserGrupo::where('semestre', $semestre_old)->get();
        foreach ($antes as $registro) {
            $newRegistro = $registro->replicate();
            $newRegistro->semestre = $new_semestre;
            $newRegistro->save();
        }

        $despues = UserGrupo::where('semestre', $new_semestre)->get();

        return ['antes'=>$antes->count(), 'despues'=>$despues->count()];
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = General::all()->groupBy('semestre');
        $semestres = [];
        foreach ($grupos as $key => $value) {
            array_push($semestres, $key);
        }
        rsort($semestres);

// dd($semestres);
        return view('semestre.index')
            ->with('semestres', $semestres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $semestre = $request->semestre;
        $new_semestre = $request->new_semestre;

        $ciclo = substr($semestre, -1, 1);
        if($ciclo == "1"){
            $chkSemestre = substr($semestre, 0, 4) . "2";
        }else{
            $chkSemestre = substr($semestre, 0, 4) + 1 . "1";
        }
// dd($chkSemestre);

        if(strlen($new_semestre) == 5 && $new_semestre == $chkSemestre){
            // Verifica si existe anteriormente
            $anterior = General::where('semestre',$new_semestre)->get();
            if($anterior->count()>0){
                flash($new_semestre.' ya existe!!!')->error();
                return back();
            }

            $semestre_old = env('SEMESTRE');
            // Copia los registros
            $antes = General::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = Unidad::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = Contenido::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = Estrategia::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }
            
            $antes = Evaluacion::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = Bibliografia::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = Responsable::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $antes = UserGrupo::where('semestre', $semestre_old)->get();
            foreach ($antes as $registro) {
                $newRegistro = $registro->replicate();
                $newRegistro->semestre = $new_semestre;
                $newRegistro->save();
            }

            $key = 'SEMESTRE';
            $value = "'".$new_semestre."'";
            // dd('$this->changeEnvironmentVariable($key,$value)');
            // $this->changeEnvironmentVariable($key,$value);

            flash('Corrija Semestre Activo en archivo .env')->success();
            return back();
        }
        flash($new_semestre.' debe tener 5 caracteres!!!')->error();
        return back();

    }

    private static function changeEnvironmentVariable($key,$value) 
    { 
        $path = base_path('.env'); 
        if(is_string(env($key))) { 
            $old = "'".env($key)."'"; 
            if (file_exists($path)) { 
                file_put_contents($path, str_replace( "$key=".$old, "$key=".$value, file_get_contents($path) )); 
            } 
        } 

    } 
}

