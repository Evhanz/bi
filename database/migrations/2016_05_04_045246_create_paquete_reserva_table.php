<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqueteReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paquete_reserva',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->integer('cantidad');

            //relaciones
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas');

            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquete');


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
        Schema::drop('paquete_reserva');
    }
}
