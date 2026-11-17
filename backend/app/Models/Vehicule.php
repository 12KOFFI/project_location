<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'immatriculation',
    'marque',
    'modele',
    'couleur',
    'annee',
    'etat',
    'kilometrage',
    'disponible',
])]
class Vehicule extends Model
{
    protected function casts(): array
    {
        return [
            'disponible' => 'boolean',
        ];
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }
}
