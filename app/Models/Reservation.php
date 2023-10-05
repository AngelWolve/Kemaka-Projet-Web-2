<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Retourne l'utilisateur associé a une réservation
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retourne le forfait associé a une réservation
     *
     * @return BelongsTo
     */
    public function forfait()
    {
        return $this->belongsTo(Forfait::class);
    }
}
