<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sends', function (Blueprint $table) {
            $table->increments('id');
            $table->unSignedInteger('user_id');
            $table->date('date_send');
            $table->date('date_answer');
            $table->date('date_response')->nullable();
            $table->mediumText('texto',100);
            $table->unSignedInteger('ncursos')->default(0);
            $table->unSignedInteger('ncheck')->default(0);
            $table->unSignedInteger('nstatus')->default(0);
            //$table->string('tipo', 4);
        //    $table->string('tablename', 20)->nullable();
            $table->boolean('sw_envio')->default(false);

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
        Schema::drop('sends');
    }
}
