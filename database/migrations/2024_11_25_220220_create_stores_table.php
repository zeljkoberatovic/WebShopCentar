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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // Naziv prodavnice
            $table->string('location')->nullable(); // Lokacija prodavnice (nullable)
            $table->text('description')->nullable(); // Opis prodavnice
            $table->string('logo')->nullable(); // Putanja do loga prodavnice (nullable)
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status prodavnice
            $table->enum('type', ['physical', 'online'])->default('physical'); // Vrsta prodavnice
            $table->string('url')->unique(); // URL prodavnice (unikatan)
            $table->enum('visibility', ['public', 'private', 'hidden'])->default('public'); // Vidljivost prodavnice
            $table->text('additional_info')->nullable(); // Dodatne informacije (nullable)
            $table->unsignedBigInteger('user_id'); // Povezivanje sa korisnikom (adminom)
            $table->timestamps();

            // Dodavanje indeksa za user_id za bolju performansu
            $table->index('user_id');

            // Povezivanje sa tabelom korisnika ('users')
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
