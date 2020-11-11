<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_colonias', function (Blueprint $table) {
            $table->increments('idColonia');
            $table->string('colonia',60);
            //$table->unsignedBigInteger('fkIdColonia');
            //$table->foreign('fkIdColonia')->references('idLocalidad')->on('cat_localidads')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('cat_colonias');
    }
}
