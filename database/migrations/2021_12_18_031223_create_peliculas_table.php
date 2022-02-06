<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            //auditoria
            $table->timestamps();
        });
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('actores');
            $table->text('sinopsis');
            $table->string('imagen');
            $table->text('duracion');
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la pelicula');
            $table->foreignId('categoria_id')->references('id')->on('categorias')->comment('Categoria de la pelicula');
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
        Schema::dropIfExists('peliculas');
        Schema::dropIfExists('categorias');
    }
}
