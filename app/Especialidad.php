<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{

	protected $fillable = [
    	'wespecialidad'
    ];

    public function wEspecialidad($siglas)
    {	    
    	$especialidad = [ 
	    	'adm' => 'Administración',
	    	'con' => 'Contabilidad',
	    	'eco' => 'Economía',
	    	'neg' => 'Administración y Negocios Internacionales',
	    	'fin' => 'Contabilidad y Finanzas',
	    ];
	    return $especialidad[$siglas];
    }



}
