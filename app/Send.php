<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
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
        $sends = Send::all();
	    foreach ($sends as $send) {
	        $today = \Carbon\Carbon::now();
	        if($send->date_answer < $today){            
	            $grupo = User::find($send->user_id)->grupo;
	            $cursos = $grupo->cursos;
	            foreach ($cursos as $curso) {
	                $status = CursoStatus::where('curso_id', $curso->curso_id)->first();
	                $status->open = false;
	                $status->save();
	            }
	            $ncursos = $grupo->ncursos;
	            $nchecks = $grupo->nchecks;
	            $nopen = $grupo->nopen;

	            $send->nstatus = $nopen;
	            $send->save();
	        }
        }
        return true;
    }    
}
