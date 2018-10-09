<?php

namespace App;

use App\Mcurso;
use Illuminate\Database\Eloquent\Model;

class Prereq extends Model
{
	protected $appends = [ 'wprereq'];

    protected function getWprereqAttribute()
    {
    	$val = Mcurso::where('cod_curso', $this->prereq)->first();
    	return $val->wcurso;
    }
}
