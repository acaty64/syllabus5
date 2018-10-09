<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Http\Controllers\Controller;
use App\Malla;
use Illuminate\Http\Request;
use Illuminate\Support\sortByDesc;
use Symfony\Component\HttpFoundation\ParameterBag;

class MallaController extends Controller
{
    //public function index(Request $request)
    public function index($especialidad)
    {
        /* Cursos de la malla segun la especialidad  */
        $val = Malla::where($especialidad, true)->get();

        //$val = Curso::where('especialidad', $especialidad)->get();

        $cursos = $val->sortBy('ciclo')->sortBy('cod_curso');

        /* Crea estructura de malla */
        for ($r=1; $r < 40 ; $r++) { 
            for ($c=1; $c < 11; $c++) { 
                $malla[$c][$r] = null;
            }
        }
        /* Llena la malla */
        /* 1er ciclo */
        $row = 0;
        $cursos1 = $cursos->where('ciclo', '1');
        foreach ($cursos1 as $curso) {
            $row ++;
            $malla[1][$row * 5 - 4] = $curso->cod_curso;
        }
        /* 2do a 10mo ciclo */
        for ($ciclo=2; $ciclo < 11; $ciclo++) { 
            $xcursos = $cursos->where('ciclo', $ciclo);
            foreach ($xcursos as $curso) {
                /* Busca el prerequisito */
                $clave = $curso->prereq;
                for ($c=1; $c < $curso->ciclo+1; $c++) {
                    if(in_array($clave, $malla[$c])){
                        $linea = array_search($clave, $malla[$c]);
                    } 
                }
                $chk = true;
                for($r=$linea; $r < count($malla[$curso->ciclo]); $r++){
                    if($malla[$curso->ciclo][$r] == null && $chk){
                        $malla[$curso->ciclo][$r] = $curso->cod_curso;
                        $chk = false;
                    }
                }
            }
        }

        /*  Nuevo array sin filas null  */
        $new_malla = [];
        for ($row=1; $row < 40 ; $row++) {
            $chk = false; 
            for ($col=1; $col < 11 ; $col++) { 
                if(!is_null($malla[$col][$row])){
                    $chk = true;
                }
            }
            if($chk){            
                $new_row = [];
                for ($col=1; $col < 11 ; $col++) { 
                    array_push($new_row, $malla[$col][$row]);
                }
                array_push($new_malla, $new_row);
            }
        }

        /* Crea data  */
        $data = [];
        foreach ($new_malla as $key1 => $fila) {
            $data_fila = [];
            foreach ($fila as $key2 => $celda) {
                if(is_null($celda)){
                    $datos = [
                            'cod_curso' => '',
                            'wcurso' => '',
                            'wprereq' => '',
                            'row' => $key1 + 1, 
                            'ciclo' => $key2 + 1,                     
                        ];
                }else{                
                    $curso = Curso::where('cod_curso', $celda)->first();
                    $datos = [
                            'cod_curso' => $celda,
                            'wcurso' => $curso->wcurso,
                            'wprereq' => $curso->wprereq,
                            'row' => $key1 + 1, 
                            'ciclo' => $curso->ciclo,                     
                        ];
                }
                array_push($data_fila, $datos);
            }
            array_push($data, $data_fila);
        }
        return view('malla')
            ->with('especialidad', $especialidad)
            ->with('data', $data)
            ->with('semestre', '20191');
    }

}
