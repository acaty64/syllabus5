<?php

namespace App\Http\Controllers\Api;

use App\Bibliografia;
use App\Cambio;
use App\Contenido;
use App\Curso;
use App\CursoCompetencia;
use App\CursoGrupo;
use App\CursoStatus;
use App\Estrategia;
use App\Evaluacion;
use App\Http\Controllers\Controller;
use App\Malla;
use App\Mcurso;
use App\Prereq;
use App\Sumilla;
use App\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;

class CambioController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('app.cambios')
                ->with('cursos', $cursos);
    }

    public function upload()
    {
        $cursos = Curso::all()->toArray();
        $data = [
                'cursos' => $cursos
            ];
        return [
                'success'=>true,
                'data' => $data
            ]; 
    }

	public function change(Request $request)
	{
        switch ($request->sw_change) {
            case 'codigo':
                $cod_curso = $request->cod_curso;
                $new_value = $request->new_data;
                $cursos = Mcurso::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Curso::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Malla::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Prereq::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Prereq::where('prereq', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->prereq = $new_value;
                    $curso->save();
                }
// return $cursos;
                $cursos = Bibliografia::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Contenido::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = CursoCompetencia::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = CursoGrupo::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Estrategia::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Evaluacion::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Sumilla::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                $cursos = Unidad::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->cod_curso = $new_value;
                    $curso->save();
                }
                break;
            case 'descripcion':
                $cod_curso = $request->cod_curso;
                $new_value = $request->new_data;
                $cursos = Mcurso::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $curso->wcurso = $new_value;
                    $curso->save();
                }                
                $cursos = Curso::where('cod_curso', $cod_curso)->get();
                foreach ($cursos as $curso) {
                    $old_wcurso = $curso->wcurso;
                    $curso->wcurso = $new_value;
                    $curso->save();
                }
                $cursos = Prereq::where('prereq', $cod_curso)->get();
                foreach ($cursos as $cambio) {
                    $curso = Curso::where('cod_curso', $cambio->cod_curso)->first();
                    $cambio = str_replace($old_wcurso, $new_value, $curso->wprereq);
                    $curso->wprereq = $cambio;
                    $curso->save();
                }
                break;
        }
        return [
                'success' => true
            ];
	}


}
