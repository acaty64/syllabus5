<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrereqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prereqs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('especialidad', 3);
            $table->char('cod_curso', 6);
            $table->char('prereq', 6);
            $table->char('plan', 1);
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
        Schema::dropIfExists('prereqs');
    }
}
