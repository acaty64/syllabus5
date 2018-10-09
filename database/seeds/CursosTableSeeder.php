<?php
use App\Curso;
use App\Malla;
use App\Mcurso;
use App\Prereq;
use Illuminate\Database\Seeder;
class CursosTableSeeder extends Seeder
{
    public function run()
    {
        /* Datos de prueba    */
        Curso::create([
            'cod_curso' => '100048',
            'wcurso' => 'CONTABILIDAD GERENCIAL',
            'ht' => 4,
            'hp' => 0,
            'horas' => 4,
            'creditos' => 4,
            'prereq' => 'EG006',
            'wprereq' => 'CONTABILIDAD GENERAL',
            'ciclo' => 3
        ]);

        /* Fin de datos de prueba    */
        $siglas = collect(['adm', 'con', 'eco', 'neg', 'fin']);
        $cursos = Malla::all();
        foreach ($cursos as $curso) {
            $ciclo = $curso->ciclo;
            $mcurso = Mcurso::where('cod_curso', $curso->cod_curso)->first();
            $cod_curso = $mcurso->cod_curso;
            $wcurso = $mcurso->wcurso;
            $ht = $mcurso->ht;
            $hp = $mcurso->hp;
            $horas = $mcurso->ht + $mcurso->hp;
            $creditos = $mcurso->creditos;
            /*****************************************************/
            /* Definir prerequisito */
            $prereq = "";
            $valores = Prereq::where('cod_curso', $curso->cod_curso)->get();
            if(count($valores) >0){
                $prereq = $valores->first()->prereq;
            }
            /* Extrae especialidades */
            $siglas = [];
            foreach ($valores as $valor) {
                array_push($siglas, $valor->especialidad);
            }
            $temp_array = array();
            foreach ($siglas as $key => $value) {
                if (!in_array($value, $temp_array)){
                    array_push($temp_array, $value);
                }
            }
            asort($temp_array);
            $siglas = $temp_array;
            /* Extrae prerequisitos por especialidad */
            $wprereq = "";
            $codigos = array();
            foreach ($siglas as $sigla) {
                $codigo = array();
                foreach ($valores->where('especialidad', $sigla) as $valor) {
                    array_push($codigo, $valor->prereq );
                }
                $codigos[$valor->especialidad] = array();
                sort($codigo);
                if( !empty($codigo) ){
                    array_push($codigos[$valor->especialidad], $codigo);
                }
            }
            /* Define prerequisitos iguales */
            $qreg = 0;
            $only_codigos = $codigos;
            sort($only_codigos);
            $compara = [];
            $xArray = [];
            foreach ($only_codigos as $key => $value) {
                if($value != $compara){
                    array_push($xArray, $value);
                    $compara = $value;
                }
            }
            if(count($xArray) > 1){            
                foreach ($xArray as $key => $value) {
                    $wprereq = $wprereq . "(";
                    $siglas = array_keys($codigos, $xArray[$key]);
                    foreach ($siglas as $key1 => $value1) {
                        $wprereq = $wprereq . ' ' . $value1 ;
                    }
                    $wprereq = $wprereq . " )";
                    foreach ($codigos[$siglas[0]][0] as $key1 => $value1) {
                        $xW = Mcurso::where('cod_curso', $value1)->first();
                        $wprereq = $wprereq . ' ' . $xW->wcurso . ' ';
                        if($key1 < count($codigos[$siglas[0]][0])-1){
                            $wprereq = $wprereq . "/";
                        }
                    }
                    if($key < count($xArray) - 1){
                        $wprereq = $wprereq . chr(13);
                    }
                }
            }else{
                if(count($xArray) == 1){
                    $siglas = array_keys($codigos, $xArray[0]);
                    foreach ($codigos[$siglas[0]] as $key => $value) {
                        foreach ($value as $key1 => $value1) {
                            $xW = Mcurso::where('cod_curso', $value1)->first();
                            $wprereq = $wprereq . ' ' . $xW->wcurso . ' ';
                            if($key1 < count($codigos[$siglas[0]][0])-1){
                                $wprereq = $wprereq . "/";
                            }
                        }
                    }
//    dd($cod_curso, $xArray[0][0][0]);
                    
                }
            }
/*
if($cod_curso == 'EG017'){
    dd($wprereq);
}
*/

            /*****************************************************/
            $curso = [
//                'plan' => $plan,
//                'especialidad' => $siglas,
                'cod_curso' => $cod_curso,
                'wcurso' => $wcurso,
                'ht' => $ht,
                'hp' => $hp,
                'horas' => $horas,
                'creditos' => $creditos,
                'prereq' => $prereq,
                'wprereq' => $wprereq,
                'ciclo' => $ciclo
                        ];
                    Curso::create($curso);
        }
/*
    	$campos = collect(['adm', 'con', 'eco', 'neg', 'fin']);
    	$plan = '8';
    	$mallas = Malla::all();
    	foreach ($mallas as $malla) {
    		foreach ($campos as $campo) {
				$siglas = $campo;
    			if($malla->$siglas){
    				$ciclo = $malla->ciclo;
    				$mcurso = Mcurso::where('cod_curso', $malla->cod_curso)->first();
    				$cod_curso = $mcurso->cod_curso;
    				$wcurso = $mcurso->wcurso;
    				$ht = $mcurso->ht;
    				$hp = $mcurso->hp;
    				$horas = $mcurso->ht + $mcurso->hp;
    				$creditos = $mcurso->creditos;

    				$xPrereqs = Prereq::where('cod_curso', $cod_curso)
    									->where('plan', $plan)
    									->where('especialidad', strtoupper($siglas))
                                        ->get();
                    $wprereq = '';
                    if(count($xPrereqs) > 0){
                        $prereq = $xPrereqs->first()->prereq;
                    }else{
                        $prereq = '';
                    }
                    foreach ($xPrereqs as $xPrereq) {
                        if(strlen($wprereq) > 0){
	    					$wprereq = $wprereq . " / ";
    					}
    					$wprereq = $wprereq . $xPrereq->wprereq;
    				}
    				$curso = [
							'plan' => $plan,
							'especialidad' => $siglas,
							'cod_curso' => $cod_curso,
							'wcurso' => $wcurso,
							'ht' => $ht,
							'hp' => $hp,
							'horas' => $horas,
							'creditos' => $creditos,
                            'prereq' => $prereq,
							'wprereq' => $wprereq,
							'ciclo' => $ciclo
    					];
    				Curso::create($curso);
    			}
    		}
    	}
*/
    }

}