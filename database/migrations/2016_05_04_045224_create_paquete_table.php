<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paquete',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('descripcion');
            $table->decimal('monto_total',9,2);
            $table->string('observacion');


            //relaciones
            $table->integer('guia_id')->unsigned();
            $table->foreign('guia_id')->references('id')->on('personas');


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
        Schema::drop('paquete');
    }
}
