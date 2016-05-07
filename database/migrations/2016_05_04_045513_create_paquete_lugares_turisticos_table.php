<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqueteLugaresTuristicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('paquete_lugar_turistico',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/

            $table->integer('dias');


            //relaciones

            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquete');
            $table->integer('lugar_turistico_id')->unsigned();
            $table->foreign('lugar_turistico_id')->references('id')->on('centro_visita');


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
        Schema::drop('paquete_lugar_turistico');
    }
}
