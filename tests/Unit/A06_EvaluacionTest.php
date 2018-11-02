<?php

namespace Tests\Unit;

use App\Evaluacion;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A06_EvaluacionTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A simple add test example.
     *
     * @test
     */
    public function addSimpleTest()
    {
    	$evaluacion = Evaluacion::create([
            "semestre" => env('SEMESTRE'), 
            "cod_curso" => "100048", 
            "texto" => "Nueva Evaluacion",
            "porcentaje" => "20",
            "semana" => "1"
    	]);

		$this->assertDatabaseHas("evaluaciones", [
            "semestre" => env('SEMESTRE'), 
            "cod_curso" => "100048", 
            "texto" => "Nueva Evaluacion",
            "porcentaje" => "20",
            "semana" => "1"
    	]);

    }

    /**
     * An add test example.
     *
     * @test
     */
    public function addTest()
    {
    	$tipo = "evaluaciones";
    	$datos = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => 'Nueva evaluacion'                   
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => '20'
                ],
                [
                    'view' => true,
                    'col' => 3,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'justify',
                    'texto' => '1'
                ],                                                                            	
	    ];
    	$data = [
					"id"=> "new",
					"button"=>"Grabar",
					"semestre"=>env("SEMESTRE"), 
					"cod_curso"=> "100048",
					"tipo"=>$tipo,
					"subtipo"=>$tipo,
					"pre_row"=>0,
					"semana"=>1,
					"editing"=>false,
					"data"=> $datos 
				];
        $request = [
			"new"=> true,
			"data"=> $data 	
		];

		//$response = $this->json('POST', '/user', ['name' => 'Sally']);
        $res = $this->json('POST', 'api/saveData', $request);

		$this->assertDatabaseHas($tipo, [
			"cod_curso"=> "100048",
			"semestre"=>env("SEMESTRE"),
			"texto" => "Nueva evaluacion",
			"porcentaje" => "20",
			"semana" => "1"
		]);
    }
   
    /**
     * An edit test example.
     *
     * @test
     */

    public function editTest()
    {
    	$this->addTest();
    	$tipo = "evaluaciones";
    	$datos = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => 'Evaluacion modificada'                   
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => '15'
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'justify',
                    'texto' => '2'
                ],
 
	    ];
    	$data = [
					"id"=> "1",
					"button"=>"Grabar",
					"semestre"=>env("SEMESTRE"), 
					"cod_curso"=> "100048",
					"tipo"=>$tipo,
					"subtipo"=>$tipo,
					"pre_row"=>0,
					"semana"=>1,
					"editing"=>false,
					"data"=> $datos 
				];
        $request = [
			"new"=> false,
			"data"=> $data 	
		];

        $res = $this->json('POST', 'api/saveData', $request);

		$this->assertDatabaseHas($tipo, [
			"cod_curso"=> "100048",
			"semestre"=>env("SEMESTRE"),
			"texto" => "Evaluacion modificada",
			"porcentaje" => "15",
			"semana" => "2"
		]);
    }


    /**
     * A delete test example.
     *
     * @test
     */
    public function deleteTest()
    {
    	$this->addTest();
    	$contenido = Evaluacion::find(1);

		$request = [
			"data"=> [
				"tipo"=>"evaluaciones",
				"id"=> $contenido->id,
				"cod_curso"=> $contenido->cod_curso,
				"semestre"=>$contenido->semestre, 
				],
			];
		$success = $this->post('api/deleteData', $request);
		$this->assertDatabaseMissing('evaluaciones',[ 
					"id"=> $contenido->id,
					"cod_curso"=> $contenido->cod_curso,
					"semestre"=>$contenido->semestre, 
				]);

    }



}
