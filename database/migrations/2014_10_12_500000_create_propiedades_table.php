<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id_propiedad');
            
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');

            $table->integer('id_region');
            $table->foreign('id_region')->references('id')->on('regiones');
            
            $table->integer('id_provincia');
            $table->foreign('id_provincia')->references('id')->on('provincias');
            
            $table->integer('id_comuna');
            $table->foreign('id_comuna')->references('id')->on('comunas');

            $table->text('direccion');
            
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            
            $table->integer('bagnos')->unsigned()->nullable();
            $table->foreign('bagnos')->references('id')->on('cantidades');
            
            $table->integer('dormitorios')->unsigned()->nullable();
            $table->foreign('dormitorios')->references('id')->on('cantidades');

            
            $table->enum('estado', ['disponible', 'en_proceso', 'arrendada', 'vendida'])->default('disponible');
            
            $table->enum('bodega', ['SI', 'NO'])->default('NO')->nullable();
            
            $table->enum('agua', ['SI', 'NO'])->default('NO')->nullable();
            
            $table->enum('luz', ['SI', 'NO'])->default('NO')->nullable();
            
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
        Schema::drop('propiedades');
    }
}
