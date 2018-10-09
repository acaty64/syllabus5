<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $appends = [ 'texto_horas', 
                           'ciclo_romano',
                        ];

    protected function getTextoHorasAttribute()
    {
    	return $this->horas . " (" . $this->ht . " HT/" . $this->hp . " HP)";
    }
    
    protected function getCicloRomanoAttribute()
    {
    	$num = [
    		'0' => '',
    		'1' => 'I',
    		'2' => 'II',
    		'3' => 'III',
    		'4' => 'IV',
    		'5' => 'V',
    		'6' => 'VI',
    		'7' => 'VII',
    		'8' => 'VIII',
    		'9' => 'IX',
    		'10' => 'X'
    	];
    	return $num[$this->ciclo];
    }

}
