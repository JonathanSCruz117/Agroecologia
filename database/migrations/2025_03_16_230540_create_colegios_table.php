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
        Schema::create('colegios', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->bigInteger('codigo')->unsigned()->unique(); // Identificador único
            $table->string('nombre');
            $table->enum('estado', ['activo', 'inactivo'])->default('activo'); // Estado del colegio
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('codigo')->on('municipios')->cascadeOnDelete();
            
            $table->timestamps();
        });
        ;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colegios');
    }
};
