<?php

namespace Tests\Unit;

use App\Contenido;
use App\Estrategia;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A04_EstrategiaTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * An add test example.
     *
     * @test
     */
    public function addTest()
    {
    	$tipo = "estrategias";
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
		$this->assertDatabaseHas('estrategias',$datos);
    }

    /**
     * An edit test example.
     *
     * @test
     */
    public function editTest()
    {
    	$this->assertTrue(true);
    	$tipo = "estrategias";
    	$data = [
    				"id"=>1, 
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181", 
//					"tipo"=>$tipo,
    				"texto"=>"Lorem Ipsum"
				];
		$estrategia = Estrategia::create($data);
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
				"tipo"=>"estrategias",
				"data"=>[
						["texto"=>"Nuevo texto"],
					],
				],
			];

		$res = $this->json('POST', 'api/saveData', $request);

        $this->post('api/saveData', $request);
		$this->assertDatabaseHas('estrategias',[ 
					"cod_curso"=> "100048",  
					"orden"=>1,  
					"semestre"=>"20181",
    				"texto"=>"Nuevo texto"
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
    	$estrategia = Estrategia::find(1);
		$request = [
			"data"=> [
				"tipo"=>"estrategias",
				"id"=> $estrategia->id,
				"cod_curso"=> "100048",
				"semestre"=>"20181", 
				],
			];
		$this->post('api/deleteData', $request);

		$this->assertDatabaseMissing('estrategias',[ 
					"id"=>1,  
					"cod_curso"=> "100048",  
					"semestre"=>"20181",
    				"texto"=>"Nuevo texto"
				]);
    }

}
