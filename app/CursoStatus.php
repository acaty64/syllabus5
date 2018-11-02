<?php

namespace App;

use App\Curso;

use Illuminate\Database\Eloquent\Model;

class CursoStatus extends Model
{
	protected $table = 'curso_status';
    
    protected $fillable = [
        'semestre', 'curso_id', 'check', 'open'
    ];

    public function getCursoAttribute()
    {
        $val = $this->belongsTo(Curso::class, 'curso_id', 'id')->first();
        return $val;
    }

}
