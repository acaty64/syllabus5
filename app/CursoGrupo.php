<?php

namespace App;

use App\Curso;
use App\Mcurso;
use Illuminate\Database\Eloquent\Model;

class CursoGrupo extends Model
{
	protected $table = "curso_grupos";
	protected $appends = [ 'wcurso' ];
	protected $fillable = [ 
			'cod_curso',
			'cod_grupo' 
		];

    protected function getWcursoAttribute()
    {
    	$curso = Mcurso::where('cod_curso', $this->cod_curso)->first();
    	return $curso->wcurso;
    }

    public function getCursoAttribute()
    {
        $val = $this->belongsTo(Curso::class, 'cod_curso', 'cod_curso')->first();
        return $val;
    }

    public function getCursoIdAttribute()
    {
        $val = $this->belongsTo(Curso::class, 'cod_curso', 'cod_curso')->first()->id;
        return $val;
    }

    public function getGrupoAttribute()
    {
        $val = $this->belongsTo(Grupo::class, 'cod_grupo', 'cod_grupo')->first();
        return $val;
    }
}
