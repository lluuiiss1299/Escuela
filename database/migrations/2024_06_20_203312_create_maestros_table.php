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
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('idMaestro');
            $table->string('nombre',255)->default('');
            $table->string('direccion',255)->default('');
            $table->string('correo',255)->default('');
            $table->string('telefono',255)->default('');
            $table->string('materia',255)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
