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
            $table->enum('t_documento', ['CC', 'TI', 'CE'])->default('CC');
            $table->integer('n_documento')->unique();
            $table->integer('n_celular');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('e_civil', ['Soltero', 'Casado', 'Separado', 'Viudo', 'Union libre'])->default('Soltero');
            $table->char('user_name');
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
