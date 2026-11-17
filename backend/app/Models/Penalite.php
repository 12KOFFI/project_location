<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['motif', 'minutes_retard', 'montant', 'date_penalite'])]
class Penalite extends Model
{
    protected function casts(): array
    {
        return [
            'date_penalite' => 'date:Y-m-d',
        ];
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
