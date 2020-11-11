<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeñasParticularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('señas_particulares', function (Blueprint $table) {
            $table->increments('idSeñasPart');
            $table->integer('idTipo');
            $table->integer('idLado');
            $table->integer('idVista');
            $table->integer('idRegion');
            $table->integer('cantidad');
            $table->string('descripcion');
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
        Schema::dropIfExists('señas_particulares');
    }
}
