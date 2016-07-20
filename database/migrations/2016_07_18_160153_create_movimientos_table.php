<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {

            
            $table->integer('id_propiedad')->unsigned();
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_user')->on('users');
            
            $table->integer('id_administrador')->unsigned();
            $table->foreign('id_administrador')->references('id_user')->on('users');

            $table->enum('movimiento', ['publicacion', 'arriendo', 'venta', 'privado']);

            $table->text('nota');

            $table->increments('id')->unique();
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
        Schema::drop('movimientos');
    }
}
