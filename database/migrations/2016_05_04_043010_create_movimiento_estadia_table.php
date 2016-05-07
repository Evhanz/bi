<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoEstadiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('movimiento_estadia',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('descripcion');
            $table->dateTime('hora_fecha');
            $table->string('tipo');


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
        Schema::drop('movimiento_estadia');
    }
}
