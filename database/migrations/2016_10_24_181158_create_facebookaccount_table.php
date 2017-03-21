<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookaccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebookaccount', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_user_id');
            $table->string('provider',20);
            $table->integer('user_id')->unsigned()->default(0);
            $table->timestamps();

            //Declaracion de las Foreign Keys
            $table->foreign('user_id')
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
        Schema::dropIfExists('facebookaccount');
    }
}
