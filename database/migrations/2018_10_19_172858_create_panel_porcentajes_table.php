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

            $table->decimal('gestion_credito', 8, 2);
            $table->decimal('seguro_bancario', 8, 2);
            $table->decimal('interes', 8, 2);
            $table->text('detalle_cambio', 255);

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
