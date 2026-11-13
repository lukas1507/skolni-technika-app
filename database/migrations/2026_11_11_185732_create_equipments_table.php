<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('nazev'); // např. MacBook Pro 16
            $table->text('popis')->nullable();
            $table->string('kategorie'); // např. Notebooky, Projektory, Kamery
            $table->string('inventarni_cislo')->unique(); // např. SP-2026-001
            $table->enum('stav', ['dostupne', 'vypujcene', 'v_servisu'])->default('dostupne');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
