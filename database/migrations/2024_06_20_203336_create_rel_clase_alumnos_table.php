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
        Schema::create('rel_clase_alumnos', function (Blueprint $table) {
            $table->increments('id_clase_alumno');
            $table->unsignedBigInteger('idClase')->nullable()->references('idClase')->on('maestros');
            $table->unsignedBigInteger('idAlumno')->nullable()->references('idAlumno')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_clase_alumnos');
    }
};
