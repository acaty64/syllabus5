<?php

namespace Tests\Unit;

use App\Bibliografia;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A05_BibliografiaTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A simple add test example.
     *
     * @test
     */
    public function addSimpleTest()
    {
    	$bibliografia = Bibliografia::create([
            "semestre" => "20182", 
            "cod_curso" => "100048",
//            "tipo"	=> 1, 
            "autor" => "Nuevo Autor",
            "titulo" => "Nuevo Titulo",
            "editorial" => "Nueva Editorial",
            "year" => 2015,
            "codigo" => "UCSSxxx",
            "orden" => "1"
    	]);

		$this->assertDatabaseHas("bibliografias", [
            "semestre" => "20182", 
            "cod_curso" => "100048",
//            "tipo"	=> "1", 
            "autor" => "Nuevo Autor",
            "titulo" => "Nuevo Titulo",
            "editorial" => "Nueva Editorial",
            "year" => "2015",
            "codigo" => "UCSSxxx",
            "orden" =>"1",
    	]);

    }

    /**
     * An add test example.
     *
     * @test
     */
    public function addTest()
    {
    	$tipo = "bibliografias";
    	$datos = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => 1,
                    'type' => 'orden',                    
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => 'Nuevo autor',
                    'type' => 'autor',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'justify',
                    'texto' => 'Nuevo titulo',
                    'type' => 'titulo',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 'Nueva editorial',
                    'type' => 'editorial',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 2015,
                    'type' => 'año',
                ],                                                                                
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 'UCSSxxx',
                    'type' => 'ubicacion',
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
			"orden"=>"1",
			"autor" => "Nuevo autor",
			"titulo" => "Nuevo titulo",
			"year" => "2015",
			"codigo" => "UCSSxxx"
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
    	$tipo = "bibliografias";
    	$datos = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => 1,
                    'type' => 'orden',                    
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => 'Autor modificado',
                    'type' => 'autor',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'justify',
                    'texto' => 'Titulo modificado',
                    'type' => 'titulo',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 'Editorial modificada',
                    'type' => 'editorial',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 2015,
                    'type' => 'año',
                ],                                                                                
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => 'UCSSxxx',
                    'type' => 'ubicacion',
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
			"orden"=>"1",
			"autor" => "Autor modificado",
			"titulo" => "Titulo modificado",
			"editorial" => "Editorial modificada",
			"year" => "2015"
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
    	$contenido = Bibliografia::find(1);

		$request = [
			"data"=> [
				"tipo"=>"bibliografias",
				"id"=> $contenido->id,
				"cod_curso"=> $contenido->cod_curso,
				"semestre"=>$contenido->semestre, 
				],
			];
		$success = $this->post('api/deleteData', $request);
		$this->assertDatabaseMissing('bibliografias',[ 
					"id"=> $contenido->id,
					"cod_curso"=> $contenido->cod_curso,
					"semestre"=>$contenido->semestre, 
				]);

    }



}
