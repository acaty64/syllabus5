<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('row');
            $table->integer('col')->nullable();
            $table->integer('cols')->nullable();
            $table->char('align', 10)->nullable();
            $table->integer('offset')->nullable();
            $table->mediumText('texto');
            $table->char('tipo', 15)->nullable();
            $table->char('subtipo', 15)->nullable();
            $table->mediumText('html')->nullable();
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
        Schema::dropIfExists('lineas');
    }
}
