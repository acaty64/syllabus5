<?php

namespace Tests\Unit;

use App\Unidad;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A03_UnidadTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A simple add test example.
     *
     * @test
     */
    public function addSimpleTest()
    {
    	$contenido = Unidad::create([
            'semestre' => "20182", 
            'cod_curso' => "100048", 
            'semana' => "3",
            'texto' => "Nuevo texto de unidad",
            'logro' => "Nuevo logro de unidad",
            'orden' => 5,
    	]);
		$this->assertDatabaseHas("unidades", [
            'semestre' => "20182", 
            'cod_curso' => "100048", 
            'semana' => "3",
            'texto' => "Nuevo texto de unidad",
            'logro' => "Nuevo logro de unidad",
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
    	$tipo = "unidades";
    	$datos = [
			[
			    "view" =>  true,
			    "col" =>  1,
			    "cols" =>  1,
			    "offset" =>  1,
			    "align" =>  "center",
			    "texto" => "16"
			],  
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Texto de unidad"
			],   	                
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Texto de logro"
			],                             	
	    ];
    	$data = [
					"id"=> "new",
					"button"=>"Grabar",
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
			"semana"=>"16",
			"texto" => "Texto de unidad",
			"logro" => "Texto de logro",
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
    	$tipo = "unidades";
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
			    "texto" => "Unidad modificada"
			],   	                
			[
			    "view" =>  true,
			    "col" =>  2,
			    "cols" =>  4,
			    "offset" =>  1,
			    "align" =>  "left",
			    "texto" => "Logro modificado"
			],                             	
	    ];
    	$data = [
					"id"=> "1",
					"button"=>"Grabar",
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
			"texto" => "Unidad modificada",
			"logro" => "Logro modificado",
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
    	$unidad = Unidad::find(1);

		$request = [
			"data"=> [
				"tipo"=>"unidades",
				"id"=> $unidad->id,
				"cod_curso"=> $unidad->cod_curso,
				"semestre"=>$unidad->semestre, 
				],
			];
		$success = $this->post('api/deleteData', $request);
		$this->assertDatabaseMissing('unidades',[ 
					"id"=> $unidad->id,
					"cod_curso"=> $unidad->cod_curso,
					"semestre"=>$unidad->semestre, 
				]);

    }

}
