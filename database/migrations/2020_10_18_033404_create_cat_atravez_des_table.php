<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatAtravezDesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_atravez_des', function (Blueprint $table) {
            $table->increments('idCatAtrevezDe');
            $table->string('atravezDe',45);
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
        Schema::dropIfExists('cat_atravez_des');
    }
}
