<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation', 20)->unique();
            $table->string('marque', 50);
            $table->string('modele', 50);
            $table->string('couleur', 30);
            $table->unsignedSmallInteger('annee');
            $table->string('etat', 20)->default('bon');
            $table->unsignedInteger('kilometrage')->default(0);
            $table->boolean('disponible')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
