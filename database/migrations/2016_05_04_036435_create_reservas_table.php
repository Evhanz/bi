<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reservas',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('descripcion');
            $table->string('observacion');
            $table->string('estado');
            $table->date('fecha');


            //relaciones
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');




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
        //
        Schema::drop('reservas');
    }
}
