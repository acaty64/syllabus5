<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(TitulosTableSeeder::class);
        $this->call(GeneralesTableSeeder::class);
        $this->call(SumillasTableSeeder::class);
        $this->call(CompetenciasTableSeeder::class);
        $this->call(UnidadesTableSeeder::class);
        $this->call(ContenidosTableSeeder::class);
        $this->call(EvaluacionesTableSeeder::class);
        $this->call(EstrategiasTableSeeder::class);
        $this->call(BibliografiasTableSeeder::class);
        $this->call(MallasTableSeeder::class);
        $this->call(McursosTableSeeder::class);
        $this->call(PrereqsTableSeeder::class);

        $this->call(CursosTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(CursoGrupoTableSeeder::class);
        $this->call(CursoCompetenciaTableSeeder::class);
    }
}
