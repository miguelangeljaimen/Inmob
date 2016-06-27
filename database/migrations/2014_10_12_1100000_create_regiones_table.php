<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiones', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('nombre');
            $table->string('ISO_3166_2_CL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regiones');
    }
}
