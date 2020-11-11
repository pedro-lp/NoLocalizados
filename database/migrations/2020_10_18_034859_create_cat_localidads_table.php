<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatLocalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_localidads', function (Blueprint $table) {
            $table->increments('idLocalidad');
            $table->string('localidad',60);
            //$table->unsignedBigInteger('fkIdMunicipio');
            //$table->foreign('fkIdMunicipio')->references('idMunicipio')->on('cat_municipios')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('cat_localidads');
    }
}
