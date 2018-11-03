<?php

namespace App;

use App\CursoGrupo;
use App\UserGrupo;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
	protected $appends = [ 'cursos', 'ncursos', 'nchecks', 'nopen', 'responsable' ];


	protected $fillable = [
        'cod_grupo', 'wgrupo',
    ];

    public function getCursosAttribute()
    {
        $val = $this->belongsTo(CursoGrupo::class, 'cod_grupo', 'cod_grupo')->get();
        return $val;
    }

    public function getNcursosAttribute()
    {
        $val = $this->belongsTo(CursoGrupo::class, 'cod_grupo', 'cod_grupo')->count();
        return $val; 
    }

    public function getNchecksAttribute()
    {
        $cursos = $this->belongsTo(CursoGrupo::class, 'cod_grupo', 'cod_grupo')->get();
        $nchecks = 0;
        foreach ($cursos as $curso) {
            if(!is_null($curso->curso->status)){                
                $nchecks = $nchecks + $curso->curso->status->check;
            }
        }
        return $nchecks;    	
    }

    public function getNopenAttribute()
    {
        $cursos = $this->belongsTo(CursoGrupo::class, 'cod_grupo', 'cod_grupo')->get();
        $nopen = 0;
        foreach ($cursos as $curso) {
            if(!is_null($curso->curso->status)){                
                    $nopen = $nopen + $curso->curso->status->open;
            }
        }
        return $nopen;    	
    }

    public function getResponsableAttribute()
    {
        $val = $this->belongsTo(UserGrupo::class, 'id', 'grupo_id')->first()->user;
        return $val; 
    }

    public function getConsistenciaAttribute()
    {
        if($this->nchecks == $this->ncursos){
            return true;
        }else{
            return false;
        }
    }

}
