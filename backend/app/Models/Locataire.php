<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'num_cni',
    'num_permis',
    'date_delivrance_permis',
    'adresse',
])]
class Locataire extends Model
{
    protected function casts(): array
    {
        return [
            'date_delivrance_permis' => 'date:Y-m-d',
        ];
    }

    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }
}
