<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->id();
            //columna de tabla noticia
            $table->string('titulo');
            $table->string('slug');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->enum('estado', ['BORRADOR', 'PUBLICADO'])->default('BORRADOR');
            $table->dateTime('fecha_publicacion');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticia');
    }
};
