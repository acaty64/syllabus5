<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mallas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cod_curso',6);
            $table->integer('ciclo');
            $table->char('tipo',1);
            $table->boolean('adm')->default(false);
            $table->boolean('con')->default(false);
            $table->boolean('eco')->default(false);
            $table->boolean('neg')->default(false);
            $table->boolean('fin')->default(false);
            $table->boolean('eegg')->default(false);
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
        Schema::dropIfExists('mallas');
    }
}
