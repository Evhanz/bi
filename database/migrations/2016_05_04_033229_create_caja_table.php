<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('caja',function(Blueprint $table)
        {

            /*-*/
            $table->increments('id');
            /**/
            $table->date('fecha');
            $table->decimal('monto_inicio',9,2);
            $table->decimal('monto_fin',9,2);
            $table->string('observacion');



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
