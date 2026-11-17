<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['nom', 'prenom', 'telephone'])]
class Personne extends Model
{
    protected function nomComplet(): Attribute
    {
        return Attribute::get(fn () => "{$this->prenom} {$this->nom}");
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function locataire(): HasOne
    {
        return $this->hasOne(Locataire::class);
    }

    public function chauffeur(): HasOne
    {
        return $this->hasOne(Chauffeur::class);
    }
}
