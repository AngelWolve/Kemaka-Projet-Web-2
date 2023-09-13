<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
     /**
     * Retourne utilisateur associé a une activité
     *
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
