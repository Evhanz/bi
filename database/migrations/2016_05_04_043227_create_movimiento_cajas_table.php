<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('movimiento_cajas',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('tipo');
            $table->decimal('cantidad',9,2);
            $table->string('tipo_pago');


            //relaciones
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->integer('caja_id')->unsigned();
            $table->foreign('caja_id')->references('id')->on('caja');


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
        Schema::drop('movimiento_cajas');
    }
}
