<?php

namespace App;

use App\Bibliografia;
use App\Contenido;
use App\Curso;
use App\CursoStatus;
use App\Estrategia;
use App\Sumilla;
use App\Traits\Consistencia;
use App\Unidad;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
	use Consistencia;

	protected $appends = ['check_today'];
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
        	$val = $curso->curso->consistencia_boolean;
//        	$val = $this->consistencia($curso->curso_id, 'boolean');
        	$curso->check = $val;
        	$curso->save();
        }
        return true;
    }

}
