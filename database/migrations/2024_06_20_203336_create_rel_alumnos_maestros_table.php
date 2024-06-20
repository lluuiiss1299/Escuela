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
        Schema::create('rel_alumnos_maestros', function (Blueprint $table) {
            $table->increments('idRel_Maestro_Alumno');
            $table->unsignedBigInteger('idMaestro')->nullable()->references('id')->on('maestros');
            $table->unsignedBigInteger('idAlumno')->nullable()->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_alumnos_maestros');
    }
};
