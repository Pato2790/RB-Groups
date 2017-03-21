<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',40);
            $table->string('direccion',40);
            $table->tinyInteger('tienevestuario');
            $table->integer('id_ciudad')->unsigned()->default(0);
            $table->integer('id_usuario')->unsigned()->default(0);

            //Declaracion de las Foreign Keys
            $table->foreign('id_ciudad')
                  ->references('id')->on('ciudad')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('id_usuario')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('establecimiento');
    }
}
