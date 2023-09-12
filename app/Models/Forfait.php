<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;
     /**
     * Retourne les reservations associés à forfait
     *
     * Relation un-à-plusieurs
     *
     * @return HasMany
     */
    public function reservations() {
        return $this->belongsToMany(User::class, 'reservations');
    }
}
