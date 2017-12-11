<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('paquete_id')->unsigned();
            $table->string('descripcion');
            $table->string('importe');
            $table->string('impuesto');

            $table->foreign('paquete_id')->references('id')->on('paquetes');

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
        Schema::drop('opciones');
    }
}
