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

class A99_Cambios1Test extends TestCase
{
	use DatabaseMigrations;

    /**
     * @test
     */
    public function changeTest()
    {
        $this->seed('DatabaseSeeder');

        $this->get('api/cambios/index')
            ->assertSee('Cambios de código / descripción de cursos');
        $request = [
                'sw_change' => 'codigo',
                'cod_curso' => 'EG002',
                'new_data' => '999999'
            ];
        $this->post('api/cambios/change', $request);
        /* mcurso */
        $this->assertDatabaseHas("mcursos", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("mcursos", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* curso */
        $this->assertDatabaseHas("cursos", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("cursos", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* mallas */
        $this->assertDatabaseHas("mallas", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("mallas", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* prereqs */
        $this->assertDatabaseHas("prereqs", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("prereqs", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* prereqs */
        $this->assertDatabaseHas("prereqs", [
            'prereq' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("prereqs", [
            'prereq' => $request['cod_curso'],
        ]);
        /* bibliografias */
        $this->assertDatabaseHas("bibliografias", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("bibliografias", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* contenidos */
        $this->assertDatabaseHas("contenidos", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("contenidos", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* curso_competencias */
        $this->assertDatabaseHas("curso_competencias", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("curso_competencias", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* curso_grupos */
        $this->assertDatabaseHas("curso_grupos", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("curso_grupos", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* estrategias */
        $this->assertDatabaseHas("estrategias", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("estrategias", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* evaluaciones */
        $this->assertDatabaseHas("evaluaciones", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("evaluaciones", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* sumillas */
        $this->assertDatabaseHas("sumillas", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("sumillas", [
            'cod_curso' => $request['cod_curso'],
        ]);
        /* unidades */
        $this->assertDatabaseHas("unidades", [
            'cod_curso' => $request['new_data'],
        ]);
        $this->assertDatabaseMissing("unidades", [
            'cod_curso' => $request['cod_curso'],
        ]);


    }

}
