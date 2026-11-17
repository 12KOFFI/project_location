<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penalites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('locations')->restrictOnDelete();
            $table->string('motif');
            $table->unsignedInteger('minutes_retard')->nullable();
            $table->unsignedInteger('montant');
            $table->date('date_penalite');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penalites');
    }
};
