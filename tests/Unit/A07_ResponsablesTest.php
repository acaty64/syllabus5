<?php

namespace Tests\Unit;

use App\Curso;
use App\CursoStatus;
use App\Evaluacion;
use App\Grupo;
use App\UserGrupo;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A07_ResponsablesTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * @test
     */
    public function linkUserGrupoTest()
    {
        // Usuario Administrador
        $user = $this->defaultUser();
        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'adm',
                    'user_id' => $user->id
                ]);
        $this->actingAs($user);
        // Crea usuario Responsable
        $responsable = $this->defaultUser();
        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'resp',
                    'user_id' => $responsable->id
                ]);
        // Crea grupo
        $grupo = Grupo::create([
                'cod_grupo' => 'GRP',
                'wgrupo'    => 'Grupo de prueba'
            ]);

        UserGrupo::create([
                'semestre'  => '20191',
                'user_id'   => $responsable->id,
                'grupo_id'  => $grupo->id
            ]);

        $cod_grupo = User::find($responsable->id)->grupo->cod_grupo;
        $this->assertTrue($cod_grupo == 'GRP');
    }

    /**
     * @test
     */
    public function linkCursoStatus($value='')
    {
        // Usuario Administrador
        $user = $this->defaultUser();
        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'adm',
                    'user_id' => $user->id
                ]);
        $this->actingAs($user);

        // Crea Curso
        $curso = Curso::create([
                'cod_curso' => 'CURSO',
                'wcurso'    => 'CURSO DE PRUEBA',
                'ht' => 4,
                'hp' => 0,
                'horas' => 4,
                'creditos' => 4,
                'prereq' => 'EG006',
                'wprereq' => 'CONTABILIDAD GENERAL',
                'ciclo' => 3
            ]);

        // Crea Status
        CursoStatus::create([
                'semestre'      => '20191',
                'curso_id'      => $curso->id,
                'check'         => false,
                'open'          => true,
            ]);
        
        $check = Curso::find($curso->id)->status->check; 
        $this->assertTrue($check == false);
        $open = Curso::find($curso->id)->status->open; 
        $this->assertTrue($open == true);

    }


}
