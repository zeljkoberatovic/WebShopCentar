<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Atributi koji se mogu masovno dodeljivati
    protected $fillable = ['name', 'email', 'password', 'role', 'terms_accepted'];

    // Atributi koji treba da budu sakriveni prilikom serijalizacije
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Kastovanje atributa (ispravljeno kao svojstvo)
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Provera da li je korisnik admin.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isUser(): bool
    {
        return $this->role === 'user';
    }

    /**
     * Relacija: jedan korisnik ima jednu prodavnicu.
     */
    public function store()
    {
        return $this->hasOne(Store::class);
    }
}
