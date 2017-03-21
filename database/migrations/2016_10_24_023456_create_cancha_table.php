<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanchaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_cancha',40);
            $table->integer('cant_jugadores');
            $table->tinyInteger('tiene_luz');
            $table->tinyInteger('techada');
            $table->integer('id_establecimiento')->unsigned()->default(0);
            $table->integer('id_deporte')->unsigned()->default(0);
            $table->integer('id_superficie')->unsigned()->default(0);

            //Declaracion de las Foreign Keys
            $table->foreign('id_establecimiento')
                  ->references('id')->on('establecimiento')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('id_deporte')
                  ->references('id')->on('deporte')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('id_superficie')
                  ->references('id')->on('superficie')
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
        Schema::dropIfExists('cancha');
    }
}
