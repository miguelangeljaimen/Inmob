<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_user')->on('users');

            $table->integer('id_propiedad')->unsigned();
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');

            $table->enum('estado',['enviada', 'en_proceso', 'cancelada']);

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
        Schema::drop('postulaciones');
    }
}
