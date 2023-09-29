<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Retourne les activités associés à utilisateur
     *
     * Relation un-à-plusieurs
     *
     * @return HasMany
     */
    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    /**
     * Retourne les actualité associés à utilisateur
     *
     * Relation un-à-plusieurs
     *
     * @return HasMany
     */
    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    /**
     * Retourne la role  associé a utilisateur
     *
     * @return BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Retourne les reservations associés à une utilisateur
     *
     * Relation un-à-plusieurs
     *
     * @return HasMany
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function getNomCompletAttribute()
    {
        return $this->prenom . " " . $this->nom;
    }
}
