<?php
 
use App\Grupo;
use App\Responsable;
use App\User;
use App\UserAcceso;
use App\UserGrupo;
use Illuminate\Database\Seeder;

class UserGrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// Agrega userGrupo desde tabla Responsable
    	$DocGrupos = Responsable::all();
    	foreach ($DocGrupos as $docGrupo) {
    		$user_id = User::where('cod_doc', $docGrupo->cod_doc)->first()->id;
    		$grupo_id = Grupo::where('cod_grupo', $docGrupo->cod_grupo)->first()->id;
    		$userGrupo = UserGrupo::where('user_id', $user_id)->get();
    		if($userGrupo->isEmpty()){
	    		UserGrupo::create([
	    				'semestre' => '20191',
	    				'user_id' => $user_id,
	    				'grupo_id' => $grupo_id
	    			]);
    		}
    	}

    }
}
