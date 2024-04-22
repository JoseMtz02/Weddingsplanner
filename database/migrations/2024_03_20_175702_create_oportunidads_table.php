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
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_oportunidad');
            $table->decimal('monto', 4, 2);
            $table->date('fecha_cierre');
            $table->tinyInteger('estatus')->default(0);
            $table->text('notas')->nullable();
            $table->unsignedInteger('prospecto_id');
            $table->foreign('prospecto_id')->references('id')->on('prospectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidads');
    }
};
