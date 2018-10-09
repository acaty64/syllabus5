<?php

namespace Tests\Unit;

use App\Contenido;
use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A01_SumillaTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * An add test example.
     *
     * @test
     */
    public function addTest()
    {
    	$tipo = "sumillas";
    	$datos = ["texto"=>"Lorem Ipsum"];
    	$data = [
					"id"=> "new",
					"cod_curso"=> "100048",  
//					"orden"=>1,  
					"plan" => "8", 
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
     * A SUMILLA's edit test example.
     *
     * @test
     */
    public function editTest()
    {
    	$this->assertTrue(true);
    	$tipo = "sumillas";
    	$data = [
    				"id"=>1, 
					"cod_curso"=> "100048",  
//					"orden"=>1,  
					"plan" => "8", 
					"tipo"=>$tipo,
    				"texto"=>"Lorem Ipsum"
				];
		$sumilla = Sumilla::create($data);
		$this->assertDatabaseHas($tipo, [ 
					"id"=>1,
					"cod_curso"=> "100048",  
//					"orden"=>1,  
					"plan" => "8",
    				"texto"=>"Lorem Ipsum"
				]);

		$request = [
			"new"=> false,
			"data"=> [
				"id"=> "1",
				"cod_curso"=> "100048",  
//				"orden"=>1,  
				"plan" => "8", 
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
//					"orden"=>1,  
					"plan" => "8",
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
    	$sumilla = Sumilla::find(1);
		$request = [
			"data"=> [
				"tipo"=>"sumillas",
				"id"=> "1",
				"cod_curso"=> "100048",
				"plan" => "8", 
				],
			];
		$this->post('api/deleteData', $request);

		$this->assertDatabaseMissing('sumillas',[ 
					"id"=>1,  
					"cod_curso"=> "100048",  
					"plan" => "8",
    				"texto"=>"Nuevo texto"
				]);


    }

}
