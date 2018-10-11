<?php

use App\Acceso;
use Illuminate\Database\Seeder;

class AccesoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acceso::create([
        	'cod_acceso' => 'master',
			'wacceso' => 'Master',
			'accesos' => true,
			'vista' => true,
			'generales' => true,
			'titulos' => true,
			'competencias' => true,
			'contenidos' => true,
			'sumillas' => true,
			'estrategias' => true,
			'evaluaciones' => true,
			'bibliografias' => true,
			'unidades' => true,
			'cursos' => true,
			'mallas' => true,
			'mcursos' => true,
			'prereqs' => true,
			'grupos' => true,
			'curso_grupos' => true,
			'curso_competencia' => true,
        ]);
        Acceso::create([
			'cod_acceso' => 'adm',
			'wacceso' => 'Administrador',
			'accesos' => true,
			'vista' => true,
			'generales' => true,
			'titulos' => true,
			'competencias' => true,
			'contenidos' => true,
			'sumillas' => true,
			'estrategias' => true,
			'evaluaciones' => true,
			'bibliografias' => true,
			'unidades' => true,
			'cursos' => true,
			'mallas' => true,
			'mcursos' => true,
			'prereqs' => true,
			'grupos' => true,
			'curso_grupos' => true,
			'curso_competencia' => true,
        ]);
        Acceso::create([
			'cod_acceso' => 'resp',
			'wacceso' => 'Responsable',
			'accesos' => false,
			'vista' => true,
			'generales' => false,
			'titulos' => false,
			'competencias' => false,
			'contenidos' => true,
			'sumillas' => true,
			'estrategias' => true,
			'evaluaciones' => false,
			'bibliografias' => true,
			'unidades' => true,
			'cursos' => false,
			'mallas' => false,
			'mcursos' => false,
			'prereqs' => false,
			'grupos' => false,
			'curso_grupos' => false,
			'curso_competencia' => false,
        ]);
        Acceso::create([
			'cod_acceso' => 'doc',
			'wacceso' => 'Docente',
			'accesos' => false,
			'vista' => true,
			'generales' => false,
			'titulos' => false,
			'competencias' => false,
			'contenidos' => true,
			'sumillas' => false,
			'estrategias' => true,
			'evaluaciones' => false,
			'bibliografias' => true,
			'unidades' => false,
			'cursos' => false,
			'mallas' => false,
			'mcursos' => false,
			'prereqs' => false,
			'grupos' => false,
			'curso_grupos' => false,
			'curso_competencia' => false,        
        ]);
        Acceso::create([
			'cod_acceso' => 'cons',
			'wacceso' => 'Consulta',
			'accesos' => false,
			'vista' => true,
			'generales' => false,
			'titulos' => false,
			'competencias' => false,
			'contenidos' => false,
			'sumillas' => false,
			'estrategias' => false,
			'evaluaciones' => false,
			'bibliografias' => false,
			'unidades' => false,
			'cursos' => false,
			'mallas' => false,
			'mcursos' => false,
			'prereqs' => false,
			'grupos' => false,
			'curso_grupos' => false,
			'curso_competencia' => false,
        ]);
    }
}
