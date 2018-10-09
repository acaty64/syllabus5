<?php

namespace App;

use App\Curso;
use App\Mcurso;
use App\Prereq;
use Illuminate\Database\Eloquent\Model;

class Malla extends Model
{
	protected $appends = [ 'wcurso', 'prereq', 'wprereq'];

    protected function getWcursoAttribute()
    {
    	$val = Mcurso::where('cod_curso', $this->cod_curso)->first();
    	return $val->wcurso;
    }

    protected function getPrereqAttribute()
    {
    	$val = Curso::where('cod_curso', $this->cod_curso)->first();
    	return $val->prereq;
    }

    protected function getWprereqAttribute()
    {
    	$val = Curso::where('cod_curso', $this->cod_curso)->first();
    	return $val->wprereq;
    }
}
