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
        Schema::create('clase', function (Blueprint $table) {
            $table->increments('id_clase');
            $table->string('materia',255)->default('');
            $table->string('horario',255)->default('');
            $table->string('idMaestro',255)->default('')->nullable()->references('idMaestro')->on('maestros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clase');
    }
};
