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
        Schema::create('cita_canceladas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motivo')->nullable();
            //Cancelada
            $table->unsignedBigInteger('cancelar_por');
            $table->foreign('cancelar_por')->references('id')->on('users')->onDelete('cascade');
            //Cita
            $table->unsignedBigInteger('citas_id');
            $table->foreign('citas_id')->references('id')->on('citas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita_canceladas');
    }
};
