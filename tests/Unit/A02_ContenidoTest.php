<?php

namespace Tests\Unit;

use App\Contenido;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A02_ContenidoTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A simple add test example.
     *
     * @test
     */
    public function addSimpleTest()
    {
    	$contenido = Contenido::create([
            'semestre' => "20182", 
            'cod_curso' => "100048", 
            'semana' => "3",
            'concepto' => "Nuevo Concepto",
            'procedimiento' => "Nuevo procedimiento",
            'actividad' => "Nueva Actividad",
            'orden' => 5,
    	]);
		$this->assertDatabaseHas("contenidos", [
            'semestre' => "20182", 
            'cod_curso' => "100048", 
            'semana' => "3",
            'concepto' => "Nuevo Concepto",
            'procedimiento' => "Nuevo procedimiento",
            'actividad' => "Nueva Actividad",
            'orden' => 5,
    	]);

    }

    /**
     * An add test example.
     *
     * @test
     */
    public function addTest()
    {
    	$tipo = "contenidos";
    	$datos = [
			[
			    "view" =>  true,
			    "col" =>  1,
			    "cols" =>  1,
			    "offset" =>  1,
			    "align" =>  "center",
			    "texto" => "1"
			],  
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Nuevo concepto"
			],   	                
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Nuevo procedimiento"
			],                         
			[
			    "view" =>  true,
			    "col" =>  6,
			    "cols" =>  2,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Nueva Actividad"
			]     	
	    ];
    	$data = [
					"id"=> "new",
					"button"=>"Editar",
					"semestre"=>"20181", 
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
			"semestre"=>"20181",
			"semana"=>"1",
			"concepto" => "Nuevo concepto",
			"procedimiento" => "Nuevo procedimiento",
			"actividad" => "Nueva Actividad"
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
    	$tipo = "contenidos";
    	$datos = [
			[
			    "view" =>  true,
			    "col" =>  1,
			    "cols" =>  1,
			    "offset" =>  1,
			    "align" =>  "center",
			    "texto" => "1"
			],  
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Concepto modificado"
			],   	                
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Procedimiento modificado"
			],                         
			[
			    "view" =>  true,
			    "col" =>  6,
			    "cols" =>  2,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Actividad modificada"
			]     	
	    ];
    	$data = [
					"id"=> "1",
					"button"=>"Editar",
					"semestre"=>"20181", 
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

		//$response = $this->json('POST', '/user', ['name' => 'Sally']);
        $res = $this->json('POST', 'api/saveData', $request);

		$this->assertDatabaseHas($tipo, [
			"cod_curso"=> "100048",
			"semestre"=>"20181",
			"semana"=>"1",
			"concepto" => "Concepto modificado",
			"procedimiento" => "Procedimiento modificado",
			"actividad" => "Actividad modificada"
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
    	$contenido = Contenido::find(1);

		$request = [
			"data"=> [
				"tipo"=>"contenidos",
				"id"=> $contenido->id,
				"cod_curso"=> $contenido->cod_curso,
				"semestre"=>$contenido->semestre, 
				],
			];
		$success = $this->post('api/deleteData', $request);
		$this->assertDatabaseMissing('contenidos',[ 
					"id"=> $contenido->id,
					"cod_curso"=> $contenido->cod_curso,
					"semestre"=>$contenido->semestre, 
				]);

    }



}
