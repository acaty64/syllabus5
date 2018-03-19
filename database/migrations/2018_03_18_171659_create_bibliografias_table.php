<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliografias', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id');
            $table->char('semestre',6);
            $table->char('cod_curso',6);
            $table->char('tipo',3);
            $table->char('autor', 255);
            $table->char('titulo', 255);
            $table->char('editorial', 255);
            $table->char('year', 255);
            $table->char('codigo',20);
            $table->integer('orden');
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
        Schema::dropIfExists('bibliografias');
    }
}
