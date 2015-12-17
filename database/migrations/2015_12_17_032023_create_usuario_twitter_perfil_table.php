<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTwitterPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Referencia para la creacion de la tabla:
     * https://dev.twitter.com/overview/api/users
     */
    public function up()
    {
        Schema::create('usuario_twitter_perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('screen_name');
            $table->string('name');
            $table->text('descripcion');
            $table->integer('favourites_count');
            $table->integer('followers_count');
            $table->integer('friends_count');
            $table->integer('statuses_count');
            $table->text('profile_image_url_https');
            $table->boolean('protected');
            $table->boolean('verified');
            $table->boolean('default_profile_image');
            $table->integer('utc_offset');
            $table->string('time_zone');
            $table->string('lang');
            $table->json('withheld_in_countries');
            $table->timestamp('twitter_created_at');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_twitter_perfil');
    }
}
