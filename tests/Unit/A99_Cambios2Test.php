<?php

namespace Tests\Unit;

use App\Curso;
use App\CursoStatus;
use App\Evaluacion;
use App\Grupo;
use App\Mcurso;
use App\Prereq;
use App\User;
use App\UserGrupo;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A99_Cambios2Test extends TestCase
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
                'sw_change' => 'descripcion',
                'cod_curso' => 'EG002',
                'new_data' => 'NUEVA DESCRIPCION'
            ];
        $old_data = Mcurso::where('cod_curso', $request['cod_curso'])->first()->wcurso;
        $this->post('api/cambios/change', $request);
        /* mcurso */
        $this->assertDatabaseHas("mcursos", [
            'cod_curso' => $request['cod_curso'],
            'wcurso' => $request['new_data']
        ]);
        // /* curso */
        $this->assertDatabaseHas("cursos", [
            'cod_curso' => $request['cod_curso'],
            'wcurso' => $request['new_data']
        ]);
        /* prereqs */
        $items = Prereq::where('prereq', $request['cod_curso'])->get();
        foreach ($items as $item) {
            $cod_curso = $item->cod_curso;
            $curso = Curso::where('cod_curso', $cod_curso)->first();
            if(strpos($curso->wprereq, $request['new_data']) == false){
                $this->assertTrue(false);
            }
            if(strpos($curso->wprereq, $old_data) == true){
                $this->assertTrue(false);
            }
        }
    }

}
