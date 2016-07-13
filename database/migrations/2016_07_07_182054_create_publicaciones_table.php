<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id')->unique();
            
            $table->integer('id_propiedad')->unsigned()->unique();
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
            
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users');

            $table->enum('tipo', ['arriendo', 'venta']);

            $table->string('titulo');
            
            $table->text('descripcion');

            $table->integer('valor_uf')->nullable();
            $table->integer('valor_cl')->nullable();
            
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
        Schema::drop('publicaciones');
    }
}
