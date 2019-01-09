<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios', function (Blueprint $table) {
            $table->increments('id');
            $table->char('descripcio', 255);
            $table->char('curso', 6);
            $table->char('ciclo', 3);
            $table->char('tipo', 3);
            $table->char('adm', 3)->nullable();
            $table->char('con', 3)->nullable();
            $table->char('eco', 3)->nullable();
            $table->char('neg', 3)->nullable();
            $table->char('fin', 3)->nullable();
            $table->char('chg_ciclo', 6)->nullable();
            $table->char('chg_codigo', 15)->nullable();
            $table->char('codigo_old', 6)->nullable();
            $table->char('nuevo', 6)->nullable();
            $table->char('modifica', 6)->nullable();
            $table->integer('creditos')->default(0) ;
            $table->integer('ht')->default(0) ;
            $table->integer('hp')->default(0) ;
            $table->integer('horas')->default(0);

            // $table->increments('id');
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
        Schema::dropIfExists('cambios');
    }
}
