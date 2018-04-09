<?php


use App\Curso;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'cod_curso' => '100048',
            'wcurso' => 'CONTABILIDAD GERENCIAL',
            'ht' => 2,
            'hp' => 2,
            'horas' => 4,
            'creditos' => 4,
            'prereq' => '100020',
            'wprereq' => 'Contabilidad General',
            'ciclo' => 3
		]);
    }
}
