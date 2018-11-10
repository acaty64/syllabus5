<?php
use App\Unidad;
use Illuminate\Database\Seeder;
class UnidadesTableSeeder extends Seeder
{
    public function run()
    {
		/************************************************/
    	/**********************************************/
        Unidad::create([
			'semestre' => '20191', 
			'cod_curso' => '100048', 
			'semana' => 1,
			'texto' => 'LA CONTABILIDAD GERENCIAL.',
			'logro' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac nunc facilisis, aliquet elit vitae, dapibus ipsum. Nulla ut quam ultrices, suscipit nulla a, tristique sapien.',
			'orden' => 1,
		]);
		Unidad::create([
			'semestre' => '20191', 
			'cod_curso' => '100048', 
			'semana' => 6,
			'texto' => 'ANALISIS E INTERPRETACION DE LOS ESTADOS FINANCIEROS.',
			'logro' => 'Quisque vitae sapien pharetra, ullamcorper quam nec, pellentesque tellus. Phasellus scelerisque augue sed volutpat lobortis.',
			'orden' => 2,
		]);
	}
}