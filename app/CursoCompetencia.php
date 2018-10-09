<?php

namespace App;

use App\Competencia;
use Illuminate\Database\Eloquent\Model;

class CursoCompetencia extends Model
{
	protected $appends = [ 'wcomp', 'orden'
                        ];

    protected function getWcompAttribute()
    {
    	$wcomp = Competencia::where('cod_comp', $this->cod_comp)
    			->where('plan', env('PLAN'))
    			->first()->texto;
    	return $wcomp;
    }
    protected function getOrdenAttribute()
    {
    	$orden = Competencia::where('cod_comp', $this->cod_comp)
    			->where('plan', env('PLAN'))
    			->first()->orden;
    	return $orden;
    }
}
