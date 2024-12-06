<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Atributi koji se mogu masovno dodeljivati
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Atributi koji treba da budu sakriveni prilikom serijalizacije
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Preko ovog atributa se obavlja kastovanje tipova podataka
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Provera da li je korisnik administrator
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Provera da li je korisnik obični korisnik (user)
    public function isUser()
    {
        return $this->role === 'user';
    }

    public function store()
{
    return $this->hasOne(Store::class);
}

}
