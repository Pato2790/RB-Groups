<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnousuario', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->tinyInteger('confirmado');
            $table->tinyInteger('pagado');
            $table->tinyInteger('estado');
            $table->integer('id_turnoAdmin')->unsigned()->default(0);
            $table->integer('id_usuario')->unsigned()->default(0);

            //Declaracion de las Foreign Keys
            $table->foreign('id_usuario')
                  ->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('id_turnoAdmin')
                  ->references('id')->on('turnoadmin')
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
        Schema::dropIfExists('turnousuario');
    }
}
