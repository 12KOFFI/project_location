<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'locataire_id',
    'vehicule_id',
    'chauffeur_id',
    'date_depart',
    'date_retour_prevue',
    'date_retour_reelle',
    'destination',
    'tarif_jour',
    'nb_jours',
    'montant_total',
    'statut',
])]
class Location extends Model
{
    protected function casts(): array
    {
        return [
            'date_depart' => 'datetime',
            'date_retour_prevue' => 'datetime',
            'date_retour_reelle' => 'datetime',
        ];
    }

    public function locataire(): BelongsTo
    {
        return $this->belongsTo(Locataire::class);
    }

    public function vehicule(): BelongsTo
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function chauffeur(): BelongsTo
    {
        return $this->belongsTo(Chauffeur::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function paiements(): HasMany
    {
        return $this->hasMany(Paiement::class);
    }

    public function penalites(): HasMany
    {
        return $this->hasMany(Penalite::class);
    }
}
