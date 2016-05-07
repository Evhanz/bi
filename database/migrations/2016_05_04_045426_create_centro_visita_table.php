<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('centro_visita',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('descripcion');
            $table->string('codigo');
            $table->string('imagen');
            $table->text('resena');
            $table->date('fecha_descubrimiento');
            $table->string('coordenada_x');
            $table->string('coordenada_y');
            $table->string('tipo');


            //relaciones

            $table->integer('descrubirdor_id')->unsigned();
            $table->foreign('descrubirdor_id')->references('id')->on('personas');


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
        Schema::drop('centro_visita');
    }
}
