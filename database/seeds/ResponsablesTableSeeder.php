<?php
use App\Responsable;
use Illuminate\Database\Seeder;
class ResponsablesTableSeeder extends Seeder
{
    public function run()
    {
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000728',
	            'cod_grupo' => 'ADM',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000191',
	            'cod_grupo' => 'CAP',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000195',
	            'cod_grupo' => 'CGE',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000201',
	            'cod_grupo' => 'CSU',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000113',
	            'cod_grupo' => 'DER',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000253',
	            'cod_grupo' => 'EST',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000242',
	            'cod_grupo' => 'FIN',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000007',
	            'cod_grupo' => 'GES',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000441',
	            'cod_grupo' => 'INV',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000285',
	            'cod_grupo' => 'MAC',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000384',
	            'cod_grupo' => 'MAT',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000241',
	            'cod_grupo' => 'MIC',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000474',
	            'cod_grupo' => 'MKT',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000590',
	            'cod_grupo' => 'OPE',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '000358',
	            'cod_grupo' => 'IDI',
		]);
        Responsable::create([
	            'semestre' => '20191',
	            'cod_doc' => '001751',
	            'cod_grupo' => 'EG_',
		]);
    }
}
