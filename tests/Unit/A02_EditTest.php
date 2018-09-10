<?php

namespace Tests\Unit;

use App\Contenido;
use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A02_EditTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A SUMILLA's edit test example.
     *
     * @test
     */
    public function editSumillaTest()
    {
    	$this->assertTrue(true);
    	$tipo = "sumillas";
    	$data = [
    				"id"=>1, 
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181", 
					"tipo"=>$tipo,
    				"texto"=>"Lorem Ipsum"
				];
		$sumilla = Sumilla::create($data);
		$this->assertDatabaseHas($tipo, [ 
					"id"=>1,
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181",
    				"texto"=>"Lorem Ipsum"
				]);

		$request = [
			"new"=> false,
			"data"=> [
				"id"=> "1",
				"cod_curso"=> "100048",  
				"orden"=>1,  
				"semestre"=>"20181", 
				"tipo"=>"sumillas",
				"data"=>[
						["texto"=>"Nuevo texto"],
					],
				],
			];

		$res = $this->json('POST', 'api/saveData', $request);

        $this->post('api/saveData', $request);
		$this->assertDatabaseHas('sumillas',[ 
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181",
    				"texto"=>"Nuevo texto"
				]);
    }

    /**
     * A simple add test example.
     *
     * @test
     */
/*
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
/*
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
*/
//            ->assertJSONFragment($array);
}
