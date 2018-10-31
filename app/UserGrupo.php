<?php

namespace App;

use App\Grupo;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserGrupo extends Model
{
	protected $table = 'user_grupo';

    protected $appends = [ 'grupo', 'user' ];

	protected $fillable = [
        'semestre', 'user_id', 'grupo_id',
    ];

    public function getGrupoAttribute()
    {
        $val = $this->belongsTo(Grupo::class, 'grupo_id', 'id')->first();
        return $val;
    }

    public function getUserAttribute()
    {
        $val = $this->belongsTo(User::class, 'user_id', 'id')->first();
        if(is_null($val)){
            return new User;
        }
        return $val;
    }

}
