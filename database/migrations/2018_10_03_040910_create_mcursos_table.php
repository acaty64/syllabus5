<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcursos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cod_curso', 6);
            $table->char('wcurso', 100);
            $table->integer('ht');
            $table->integer('hp');
            $table->integer('creditos');
            $table->char('abreviatur', 15);
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
        Schema::dropIfExists('mcursos');
    }
}
