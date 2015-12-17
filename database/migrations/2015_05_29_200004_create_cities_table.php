<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->char('country_code', 3);
            $table->string('district');
            $table->integer('population')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
