<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personals', function (Blueprint $table) {
            $table->increments('idDatosPersonal');
            $table->string('nombre',45);
            $table->string('primerApellido',45);
            $table->string('segundoAPellido',45);
            $table->string('cargo',45);
            $table->string('dependencia',45);
            $table->string('unidadAdministrativa',45);
            $table->string('correoElectronico',45);
            $table->integer('idEstado');
            //$table->unsignedBigInteger('fkIdUsuarios');
            //$table->foreign('fkIdUsuarios')->references('id')->on('users');
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
        Schema::dropIfExists('datos_personals');
    }
}
