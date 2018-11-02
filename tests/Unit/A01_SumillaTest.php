<?php

namespace Tests\Unit;

use App\Acceso;
use App\Contenido;
use App\Sumilla;
use App\UserAcceso;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class A01_SumillaTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * An add test example.
     *
     * @test
     */
    public function Sumilla_Add()
    {

//dd($userAcceso);
    	$tipo = "sumillas";
    	$datos = ["texto"=>"Lorem Ipsum"];
    	$data = [
					"id"=> "new",
					"cod_curso"=> "100048",  
					"plan" => env('PLAN'), 
					"semestre"=>env('SEMESTRE'),
					"tipo"=>$tipo,
					"data"=>[ $datos ],
				];
        $request = [
			"new"=> true,
			"data"=> $data 	
		];
        $this->post('api/saveData', $request)
        	->assertStatus(200);

		$this->assertDatabaseHas('sumillas',$datos);
    }

    /**
     * A SUMILLA's edit test example.
     *
     * @test
     */
    public function Sumilla_Edit()
    {
    	$tipo = "sumillas";
    	$data = [
    				"id"=>1, 
					"cod_curso"=> "100048",  
					"semestre"=>env('SEMESTRE'),  
					"plan" => env('PLAN'), 
					"tipo"=>$tipo,
    				"texto"=>"Lorem Ipsum"
				];
		$sumilla = Sumilla::create($data);
		$this->assertDatabaseHas($tipo, [ 
					"id"=>1,
					"cod_curso"=> "100048",  
//					"orden"=>1,  
					"plan" => env('PLAN'),
    				"texto"=>"Lorem Ipsum"
				]);

		$request = [
			"new"=> false,
			"data"=> [
				"id"=> "1",
				"cod_curso"=> "100048",  
//				"orden"=>1,  
				"plan" => env('PLAN'), 
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
					"plan" => env('PLAN'),
    				"texto"=>"Nuevo texto"
				]);
    }

    /**
     * A delete test example.
     *
     * @test
     */
    public function Sumilla_Delete()
    {
		$datos =  [
					"cod_curso"=> "100048",  
					"plan" => env('PLAN'),
					"texto" => "Lorem Ipsum"
				];   	
    	$sumilla = Sumilla::create($datos);
		$request = [
			"data"=> [
				"tipo"=>"sumillas",
				"id"=> "1",
				"cod_curso"=> "100048",
				"plan" => env('PLAN'), 
				"semestre" => env('SEMESTRE'),
				],
			];
		$this->post('api/deleteData', $request);

		$this->assertDatabaseMissing('sumillas',[ 
					"id"=>1,  
					"cod_curso"=> "100048",  
					"plan" => env('PLAN'),
    				"texto"=>"Nuevo texto"
				]);


    }

}
