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
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');

            $table->integer('id_region')->length(2)->unsigned();
            $table->foreign('id_region')->references('id_region')->on('region');
            
            $table->integer('id_provincia')->unsigned();
            $table->foreign('id_provincia')->references('id_provincia')->on('provincia');
            
            $table->integer('id_comuna')->unsigned();
            $table->foreign('id_comuna')->references('id_comuna')->on('comuna');
            
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            
            $table->integer('bagnos')->nullable();
            $table->foreign('id_cantidad')->references('id_cantidad')->on('cantidades');
            
            $table->integer('dormitorios')->nullable();
            $table->foreign('id_cantidad')->references('id_cantidad')->on('cantidades');
            
            $table->enum('bodega', ['SI', 'NO'])->default('NO')->nullable();
            
            $table->enum('agua', ['SI', 'NO'])->default('NO')->nullable();
            
            $table->enum('luz', ['SI', 'NO'])->default('NO')->nullable();
            
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
        Schema::drop('propiedades');
    }
}
