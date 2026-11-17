<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['montant', 'mode_paiement', 'date_paiement', 'reference'])]
class Paiement extends Model
{
    protected function casts(): array
    {
        return [
            'date_paiement' => 'date:Y-m-d',
        ];
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
