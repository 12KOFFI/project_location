<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['num_permis', 'disponible'])]
class Chauffeur extends Model
{
    protected function casts(): array
    {
        return [
            'disponible' => 'boolean',
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
