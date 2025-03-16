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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->bigInteger('codigo')->unsigned()->unique(); // Identificador único
            $table->string('nombre');
            $table->unsignedBigInteger('colegio_id');
            $table->foreign('colegio_id')->references('codigo')->on('colegios')->cascadeOnDelete();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
