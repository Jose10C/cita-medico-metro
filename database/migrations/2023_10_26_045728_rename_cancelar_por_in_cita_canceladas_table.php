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
        Schema::table('cita_canceladas', function (Blueprint $table) {
            $table->renameColumn('cancelar_por', 'cancelado_por_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cita_canceladas', function (Blueprint $table) {
            $table->renameColumn('cancelado_por_id', 'cancelar_por');
        });
    }
};
