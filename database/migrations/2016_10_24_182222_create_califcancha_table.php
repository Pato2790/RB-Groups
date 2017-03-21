<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalifcanchaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('califcancha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puntaje');
            $table->integer('id_usuario')->unsigned()->default(0);
            $table->integer('id_cancha')->unsigned()->default(0);

            //Declaracion de las Foreign Keys
            $table->foreign('id_usuario')
                  ->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('id_cancha')
                  ->references('id')->on('cancha')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('califcancha');
    }
}
