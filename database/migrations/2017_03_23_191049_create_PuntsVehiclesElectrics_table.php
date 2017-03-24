<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntsVehiclesElectricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoIdentificador');
            $table->integer('codigoConector');
            $table->string('tipoConector');
            $table->integer('potenciaMaxCarga');
            $table->string('tipoCarga');
            $table->string('coordenadaX');
            $table->string('coordenadaY');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('barrio');
            $table->integer('codigoPostal');
            $table->string('tipoAcceso');
            $table->string('operador');
            $table->integer('telf');
            $table->string('controlAcceso');
            $table->string('restriccionUso');
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
