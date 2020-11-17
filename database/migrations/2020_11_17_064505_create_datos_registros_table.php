<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_registros', function (Blueprint $table) {
            $table->increments('idDatosRegistro');
            $table->string('expedinte',150);
            $table->dateTime('fechaInicio');
            $table->integer('idEstatus');
            $table->integer('idDelito');
            $table->integer('idMedioConocimiento');
            $table->integer('idAtravesDe');
            //$table->unsignedBigInteger('fkidDatosDelPersonal');
            //$table->foreign('fkidDatosDelPersonal')->references('idDatosDelPersonal')->on('datos_personals');
            $table->dateTime('fechaActualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_registros');
    }
}
