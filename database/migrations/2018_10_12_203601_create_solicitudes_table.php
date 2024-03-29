<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('estado_solicitud', ['Pendiente', 'Aprobado', 'Desaprobado'])->default('Pendiente');

            $table->bigInteger('valor_gestion');
            $table->bigInteger('valor_interes');
            $table->bigInteger('valor_total_pagar');
            $table->bigInteger('valor_seguro');
            $table->bigInteger('valor_solicitado');
            $table->bigInteger('dias_limite');
            
            /*
            * Relacion con tabla usuarios
            */
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('solicitudes');
    }
}
