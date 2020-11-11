<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_municipios', function (Blueprint $table) {
            $table->increments('idMunicipio');
            $table->string('municipio',60);
            //$table->unsignedBigInteger('fkIdEstado');
            //$table->foreign('fkIdEstado')->references('idEstado')->on('cat_estados')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('cat_municipios');
    }
}
