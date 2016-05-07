<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personas',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->string('nombres');
            $table->string('doc_identidad');
            $table->date('fecha_nacimiento');
            $table->string('tipo');
            $table->string('correo');
            $table->boolean('estado');
            $table->string('direccion');
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();


            //relaciones

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
        Schema::drop('persona');
    }
}
