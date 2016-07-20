<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {

            $table->integer('id_publicacion')->unsigned();
            $table->foreign('id_publicacion')->references('id')->on('publicaciones');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_user')->on('users');

            $table->string('asunto');
            $table->text('mensaje');
            $table->enum('estado',['enviado', 'leido']);

            $table->increments('id');
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
        Schema::drop('consultas');
    }
}
