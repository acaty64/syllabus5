<?php

namespace App;

use App\Bibliografia;
use App\Contenido;
use App\Curso;
use App\CursoStatus;
use App\Estrategia;
use App\Sumilla;
use App\Unidad;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
	protected $appends = ['check_today', 'consistencia'];
	protected $table = 'sends';
	protected $fillable = [
		'user_id', 
		'date_send', 
		'date_answer',
		'date_response',
		'tx_need',
		'texto',
		'ncursos',		
		'ncheck',		
		'nstatus',		
    ];

    public function getUserAttribute()
    {
        //$val = Acceso::where('id', $this->acceso_id)->first();
        $val = $this->belongsTo(User::class, 'user_id', 'id')->first();
        return $val;
    }

    public function getCheckTodayAttribute()
    {
    	/* Envios  */
        $sends = Send::all();
	    foreach ($sends as $send) {
	        $today = Carbon::today('America/Lima');
	        $grupo = User::find($send->user_id)->grupo;
	        $cursos = $grupo->cursos;
	        foreach ($cursos as $curso) {
	            $status = CursoStatus::where('curso_id', $curso->curso_id)->first();
	        	if($today < Carbon::parse($send->date_answer)->endOfDay()){
	                $status->open = true;
	            }else{
	            	$status->open = false;
	            }
	            $status->save();
	        }
            $ncursos = $grupo->ncursos;
            $nchecks = $grupo->nchecks;
            $nopen = $grupo->nopen;

            $send->nstatus = $nopen;
            $send->save();
        }

        /* Consistencia */
        $cursos = CursoStatus::all();
        foreach ($cursos as $curso) {
        	$val = $this->consistencia($curso->curso_id, 'boolean');
        	$curso->check = $val;
        	$curso->save();
        }
        return true;
    }
 
	public function consistencia($curso_id, $type)
	{
		$consistencia = [];
		$incompleto = 0;
		$curso = Curso::find($curso_id);
		/* Sumilla */
		$sumilla = Sumilla::where('plan', env("PLAN"))
							->where('cod_curso', $curso->cod_curso)->first();
		if(is_null($sumilla)){
			array_push($consistencia, ['campo'=>'sumilla', 
										'texto' => 'No se ha ingresado el texto de la SUMILLA.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['campo'=>'sumilla', 
										'texto' => 'ok']);
		}
		/* Unidades */
		$unidades = Unidad::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if($unidades->count() < 3){
			array_push($consistencia, ['campo'=>'unidades', 
										'texto' => 'No se ha ingresado por lo menos 2 UNIDADES.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['campo'=>'unidades', 
										'texto' => 'ok']);
		}
		/* Contenidos */
		foreach ($unidades as $unidad) {
			$contenidos = Contenido::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)
							->where('semana', $unidad->semana)->get();
			if(is_null($contenidos)){
				array_push($consistencia, ['campo'=>'contenido '.$unidad->semana, 
											'texto' => 'No se ha ingresado CONTENIDO en la unidad ' . $unidad->texto . '.']);
				$incompleto++;
			}else{
				array_push($consistencia, ['campo'=>'contenido '.$unidad->semana, 
											'texto' => 'ok']);
			}
		}
		/* Estrategia */
		$estrategia = Estrategia::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if(is_null($estrategia)){
			array_push($consistencia, ['campo'=>'estrategia', 
										'texto' => 'No se ha ingresado el texto de las ESTRATEGIAS METODOLÓGICAS.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['campo'=>'estrategia', 
										'texto' => 'ok']);
		}

		/* Bibliografia */
		$bibliografia = Bibliografia::where('semestre', env("SEMESTRE"))
							->where('cod_curso', $curso->cod_curso)->get();
		if($bibliografia->count() < 3){
			array_push($consistencia, ['campo'=>'bibliografia', 
										'texto' => 'No se ha ingresado por lo menos 2 BIBLIOGRAFÍAS.']);
			$incompleto++;
		}else{
			array_push($consistencia, ['campo'=>'bibliografia', 
										'texto' => 'ok']);
		}

		if($type == 'array'){
			return $consistencia;
		}else{
			return ($incompleto === 0);
		}
	}    

}
