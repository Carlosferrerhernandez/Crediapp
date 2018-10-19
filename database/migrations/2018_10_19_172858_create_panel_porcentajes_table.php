<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelPorcentajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel_porcentajes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('gestion_credito');
            $table->integer('seguro_bancario');
            $table->integer('interes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panel_porcentajes');
    }
}
