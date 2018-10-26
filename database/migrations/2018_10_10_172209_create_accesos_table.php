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
            $table->boolean('accesos')->default(false);
            $table->boolean('vista')->default(false);
            $table->boolean('generales')->default(false);
            $table->boolean('titulos')->default(false);
            $table->boolean('competencias')->default(false);
            $table->boolean('contenidos')->default(false);
            $table->boolean('sumillas')->default(false);
            $table->boolean('estrategias')->default(false);
            $table->boolean('evaluaciones')->default(false);
            $table->boolean('bibliografias')->default(false);
            $table->boolean('unidades')->default(false);
            $table->boolean('cursos')->default(false);
            $table->boolean('mallas')->default(false);
            $table->boolean('mcursos')->default(false);
            $table->boolean('prereqs')->default(false);
            $table->boolean('grupos')->default(false);
            $table->boolean('curso_grupos')->default(false);
            $table->boolean('curso_competencia')->default(false);
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
