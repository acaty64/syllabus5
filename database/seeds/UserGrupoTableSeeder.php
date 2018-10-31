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
    	// Agrega los usuarios
        $acceso_id = 3; //Responsables
    	$responsables = Responsable::all()->unique('cod_doc');
    	foreach ($responsables as $responsable) {
    		$user = User::create([
    				'name' 		=> str_random(10),
            		'email' 	=> str_random(10) . '@gmail.com',
            		'cod_doc' 	=> $responsable->cod_doc,
            		'password' 	=> bcrypt('secret'),
    			]);

            $userAcceso = UserAcceso::create([
                    'user_id' => $user->id,
                    'acceso_id' => $acceso_id
                ]);
    	}
    	// Agrega userGrupo 
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
