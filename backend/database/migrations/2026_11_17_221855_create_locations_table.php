<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locataire_id')->constrained('locataires')->restrictOnDelete();
            $table->foreignId('vehicule_id')->constrained('vehicules')->restrictOnDelete();
            $table->foreignId('chauffeur_id')->nullable()->constrained('chauffeurs')->restrictOnDelete();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();
            $table->dateTime('date_depart');
            $table->dateTime('date_retour_prevue');
            $table->dateTime('date_retour_reelle')->nullable();
            $table->string('destination');
            $table->unsignedInteger('tarif_jour');
            $table->unsignedSmallInteger('nb_jours');
            $table->unsignedInteger('montant_total');
            $table->enum('statut', ['en_cours', 'terminee', 'annulee'])->default('en_cours');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
