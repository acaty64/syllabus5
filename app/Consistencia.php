<?php

namespace App;

use App\Bibliografia;
use App\Contenido;
use App\Curso;
use App\Estrategia;
use App\Sumilla;
use App\Unidad;
use Illuminate\Database\Eloquent\Model;

class Consistencia extends Model
{
	public function curso($curso_id, $type)
	{
		$consistencia = [];
		$incompleto = 0;
		$curso = Curso::find($curso_id);
		/* Sumilla */
		$sumilla = Sumilla::where('plan', env("PLAN"))
							->where('cod_curso', $curso->cod_curso)->first();
		if(is_empty($sumilla)){
			array_push($consistencia, ['sumilla' => 'No se ha ingresado el texto de la SUMILLA.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['sumilla' => 'ok']);
		}
		/* Unidades */
		$unidades = Unidad::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if($unidades->count() < 3){
			array_push($consistencia, ['unidades' => 'No se ha ingresado por lo menos 2 UNIDADES.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['unidades' => 'ok']);
		}
		/* Contenidos */
		foreach ($unidades as $unidad) {
			$contenidos = Contenido::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)
							->where('semana', $unidad->semana)->get();
			if(is_empty($contenidos)){
				array_push($consistencia, ['contenidos' => 'No se ha ingresado CONTENIDO en la unidad ' . $unidad->texto . '.']);
				$incompleto++;
			}else{
				array_push($consistencia, ['contenido' . $unidad->orden => 'ok']);
			}
		}
		/* Estrategia */
		$estrategia = Estrategia::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if(is_empty($estrategia)){
			array_push($consistencia, ['estrategia' => 'No se ha ingresado el texto de las ESTRATEGIAS METODOLÓGICAS.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['estrategia' => 'ok']);
		}

		/* Bibliografia */
		$bibliografia = Bibliografia::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if($bibliografia->count() < 3){
			array_push($consistencia, ['bibliografia' => 'No se ha ingresado por lo menos 2 BIBLIOGRAFÍAS.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['bibliografia' => 'ok']);
		}
		if($type == 'array'){
			return $consistencia;
		}else{
			return ($incompleto === 0);
		}
	}
}
