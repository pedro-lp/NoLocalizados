<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatMedioConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_medio_conocimientos', function (Blueprint $table) {
            $table->increments('idMedioConocimiento');
            $table->string('medio',45);
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
        Schema::dropIfExists('cat_medio_conocimientos');
    }
}
