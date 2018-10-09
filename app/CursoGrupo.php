<?php

namespace App;

use App\Mcurso;
use Illuminate\Database\Eloquent\Model;

class CursoGrupo extends Model
{
	protected $table = "curso_grupos";
	protected $appends = [ 'wcurso' ];

    protected function getWcursoAttribute()
    {
    	$curso = Mcurso::where('cod_curso', $this->cod_curso)->first();
    	return $curso->wcurso;
    }
    
}
