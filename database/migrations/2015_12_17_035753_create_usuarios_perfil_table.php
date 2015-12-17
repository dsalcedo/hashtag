<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->integer('sexo_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('pais_id')->references('id')->on('countries');
            $table->foreign('ciudad_id')->references('id')->on('cities');
            $table->foreign('sexo_id')->references('id')->on('catalogo_sexo');

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
        Schema::drop('usuarios_perfil');
    }
}
