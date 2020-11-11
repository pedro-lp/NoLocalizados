<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_estados', function (Blueprint $table) {
            $table->increments('idEstado');
            //$table->string('estado',60);
            //$table->unsignedBigInteger('fkIdNacionalidad');
            //$table->foreign('fkIdNacionalidad')->references('idCatNacionalidad')->on('cat_nacionalidads')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('cat_estados');
    }
}
