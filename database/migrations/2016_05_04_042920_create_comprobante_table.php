<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comprobante',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->decimal('monto_inicial',9,2);
            $table->decimal('monto_final',9,2);
            $table->time('hora_inicio');
            $table->time('hora_fin');

            //relaciones
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
    }
}
