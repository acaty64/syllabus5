<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoStatus extends Model
{
	protected $table = 'curso_status';

    protected $fillable = [
        'semestre', 'curso_id', 'check', 'open'
    ];

}
