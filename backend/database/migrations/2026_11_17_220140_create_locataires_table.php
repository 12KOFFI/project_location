<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locataires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personne_id')->unique()->constrained('personnes')->restrictOnDelete();
            $table->string('num_cni', 30)->unique();
            $table->string('num_permis', 30)->unique();
            $table->date('date_delivrance_permis');
            $table->string('adresse');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locataires');
    }
};
