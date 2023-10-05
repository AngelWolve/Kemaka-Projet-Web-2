<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Retourne les utilisateurs associés à role
     *
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
