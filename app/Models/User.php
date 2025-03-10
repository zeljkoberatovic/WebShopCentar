<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use App\Services\Filters\UserFilter;

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

    

    // Ovaj metod treba da bude scope za filtriranje korisnika po imenu
    public function scopeFilter(Builder $query, $filters)
    {
        foreach ($filters as $filter => $value) {
            if (method_exists($this, $filter)) {
                // Pozivamo metod za svaki filter
                $query->{$filter}($value);
            }
        }
        
        return $query;
    }

    // Scope za filtriranje po imenu
    public function scopeName(Builder $query, $value)
    {
        return $query->where('name', 'like', "%{$value}%");
    }

    // Scope za filtriranje po emailu
    public function scopeEmail(Builder $query, $value)
    {
        return $query->where('email', 'like', "%{$value}%");
    }


    /**
     * Relacija: jedan korisnik ima jednu prodavnicu.
     */
    public function store()
    {
        return $this->hasOne(Store::class);
    }
}
