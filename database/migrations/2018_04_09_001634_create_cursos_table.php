<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id') ;
//            $table->char('especialidad', 3) ;
//            $table->char('plan', 1) ;
            $table->char('cod_curso', 6) ;
            $table->char('wcurso', 100) ;
            $table->integer('ht') ;
            $table->integer('hp') ;
            $table->integer('horas');
            $table->integer('creditos') ;
            $table->char('prereq', 6) ;
            $table->mediumText('wprereq') ;
            $table->integer('ciclo') ;
            $table->timestamps() ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
