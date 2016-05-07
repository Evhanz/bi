<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroVisitaReservaTable extends Migration
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
        Schema::create('centro_visita_reserva',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->date('fecha');
            $table->integer('cantidad');


            //relaciones

            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->integer('centro_visita_id')->unsigned();
            $table->foreign('centro_visita_id')->references('id')->on('centro_visita');


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
        Schema::drop('centro_visita_reserva');
    }
}
