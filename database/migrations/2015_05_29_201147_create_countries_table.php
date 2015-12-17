<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->char('code', 3)->unique();
            $table->string('name');
            $table->enum('continent', ['Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America']);
            $table->string('region');
            $table->decimal('surface_area', 10, 2);
            $table->integer('indep_year');
            $table->integer('population');
            $table->decimal('life_expectancy', 3, 1);
            $table->decimal('gnp', 10, 2);
            $table->decimal('gnp_old', 10, 2);
            $table->string('local_name', 45);
            $table->string('government_form');
            $table->string('head_of_state');
            $table->integer('capital')->unsigned();
            $table->char('code2', 2);

            $table->foreign('capital')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
