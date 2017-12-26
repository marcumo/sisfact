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
            $table->increments('id'); //enteros sin signo
            $table->string('name'); //Varchar
            $table->string('rol_usuario'); //Varchar
            $table->string('email')->unique(); //Varchar pero es única (no hay dos usuarios con el mismo email)
            $table->string('password');
            $table->rememberToken(); //métodos helpers 
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
