<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('estado_reserva',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->date('fecha');
            $table->string('observacion');


            //relaciones
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas');


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
        Schema::drop('estado_reserva');
    }
}
