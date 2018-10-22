<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConyugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conyuges', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombres_conyuge')->nullable();
            $table->char('apellido_conyuge')->nullable();
            $table->bigInteger('documento_conyuge')->nullable();
            $table->char('lugar_conyuge')->nullable();
            $table->date('nacimiento_conyuge')->nullable();
            $table->bigInteger('telefono_conyuge')->nullable();

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
        Schema::dropIfExists('conyuges');
    }
}
