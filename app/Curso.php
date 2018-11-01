<?php

namespace App;

use App\Consistencia;
use App\CursoStatus;
use App\Send;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $appends = [ 'texto_horas', 
                           'ciclo_romano',
                           'status',
                           'consistencia'
                        ];

    protected $fillable = [
        'cod_curso', 'wcurso', 'ht', 'hp', 
        'horas', 'creditos', 'prereq', 'wprereq', 
        'ciclo',
    ];

    protected function getStatusAttribute()
    {
        $val = $this->belongsTo(CursoStatus::class, 'id', 'curso_id')->first();
        return $val;
    }

    protected function getConsistenciaAttribute()
    {
        $val = Send::find(1)->consistencia($this->id, 'boolean');
        return $val;
    }

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
