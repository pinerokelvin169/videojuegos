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
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->char('titulo', 100);
            $table->char('modulo', 50);
            $table->char('gravedad', 8);
            $table->char('estado', 15)->default('Nuevo');
            $table->char('pasos_reproduccion', 200);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
