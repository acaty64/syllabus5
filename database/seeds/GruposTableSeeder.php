<?php
use App\Grupo;
use Illuminate\Database\Seeder;
class GruposTableSeeder extends Seeder
{
    public function run()
    {
        Grupo::create([
	            'cod_grupo' => 'EG_',
	            'wgrupo' => 'ESTUDIOS GENERALES',
		]);
        Grupo::create([
	            'cod_grupo' => 'MAT',
	            'wgrupo' => 'MATEMATICAS',
		]);
        Grupo::create([
	            'cod_grupo' => 'EST',
	            'wgrupo' => 'ESTADISTICAS',
		]);
        Grupo::create([
	            'cod_grupo' => 'DER',
	            'wgrupo' => 'DERECHO',
		]);
        Grupo::create([
	            'cod_grupo' => 'ADM',
	            'wgrupo' => 'ADMINISTRACION',
		]);
        Grupo::create([
	            'cod_grupo' => 'MKT',
	            'wgrupo' => 'MARKETING',
		]);
        Grupo::create([
	            'cod_grupo' => 'OPE',
	            'wgrupo' => 'OPERACIONES',
		]);
        Grupo::create([
	            'cod_grupo' => 'GES',
	            'wgrupo' => 'GESTION',
		]);
        Grupo::create([
	            'cod_grupo' => 'FIN',
	            'wgrupo' => 'FINANZAS',
		]);
        Grupo::create([
	            'cod_grupo' => 'CGE',
	            'wgrupo' => 'CONTABILIDAD GENERAL',
		]);
        Grupo::create([
	            'cod_grupo' => 'CSU',
	            'wgrupo' => 'CONTABILIDAD SUPERIOR',
		]);
        Grupo::create([
	            'cod_grupo' => 'CAP',
	            'wgrupo' => 'CONTABILIDAD APLICADA',
		]);
        Grupo::create([
	            'cod_grupo' => 'MAC',
	            'wgrupo' => 'MACROECONOMIA',
		]);
        Grupo::create([
	            'cod_grupo' => 'MIC',
	            'wgrupo' => 'MICROECONOMIA',
		]);
        Grupo::create([
	            'cod_grupo' => 'INV',
	            'wgrupo' => 'INVESTIGACION',
		]);
        Grupo::create([
	            'cod_grupo' => 'IDI',
	            'wgrupo' => 'IDIOMAS',
		]);
    }
}
