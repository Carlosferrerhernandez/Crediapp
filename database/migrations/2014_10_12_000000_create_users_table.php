<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombres');
            $table->char('apellidos');
            $table->char('lugar_expedicion');
            $table->date('fecha_expedicion');
            /*$table->enum('t_documento', ['CC', 'TI', 'CE'])->default('CC');*/

            $table->bigInteger('n_documento')->unique();
            $table->bigInteger('n_celular');
            $table->string('email');
            $table->string('user_name');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('e_civil', ['Soltero', 'Casado', 'Separado', 'Viudo', 'Union libre', 'Otro'])->default('Soltero');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
