<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosReportantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_reportantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidoPat');
            $table->string('apellidoMat');
            $table->integer('sexo');
            $table->integer('nacionalidad');
            $table->string('curp');
            $table->string('rfc');
            $table->integer('edoCivil');
            $table->integer('edoNacimiento');
            $table->date('fechaNacimiento');
            $table->integer('edad');
            $table->integer('escolaridad');
            $table->integer('relacion');
            $table->string('correo');
            $table->string('telMovil');
            $table->string('telFijo');

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
        Schema::dropIfExists('datos_reportantes');
    }
}
