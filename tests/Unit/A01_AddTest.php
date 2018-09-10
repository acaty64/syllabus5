<?php

namespace Tests\Unit;

use App\Contenido;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A01_AddTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * An add test example.
     *
     * @test
     */
    public function sumillaTest()
    {
    	$tipo = "sumillas";
    	$datos = ["texto"=>"Lorem Ipsum"];
    	$data = [
					"id"=> "new",
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181", 
					"tipo"=>$tipo,
					"data"=>[ $datos ]
				];
        $request = [
			"new"=> true,
			"data"=> $data 	
		];

        $this->post('api/saveData', $request);
		$this->assertDatabaseHas('sumillas',$datos);
    }

    /**
     * A simple add test example.
     *
     * @test
     */
    public function contenidoTest()
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
    public function addContenidoTest()
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

//            ->assertJSONFragment($array);
}
