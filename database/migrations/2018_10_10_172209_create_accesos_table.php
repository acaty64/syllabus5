<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cod_acceso', 6);
            $table->char('wacceso', 15);
            $table->boolean('accesos');
            $table->boolean('vista');
            $table->boolean('generales');
            $table->boolean('titulos');
            $table->boolean('competencias');
            $table->boolean('contenidos');
            $table->boolean('sumillas');
            $table->boolean('estrategias');
            $table->boolean('evaluaciones');
            $table->boolean('bibliografias');
            $table->boolean('unidades');
            $table->boolean('cursos');
            $table->boolean('mallas');
            $table->boolean('mcursos');
            $table->boolean('prereqs');
            $table->boolean('grupos');
            $table->boolean('curso_grupos');
            $table->boolean('curso_competencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesos');
    }
}
