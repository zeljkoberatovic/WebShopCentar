<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'name',
    'description',
    'location',
    'logo',
    'status',
    'user_id',
    'type',
    'url',
    'visibility',
    'additional_info',
        
    ];

    // Relacija sa korisnikom (vlasnikom prodavnice)
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Cast atributa za sigurniji rad
    protected $casts = [
        'user_id' => 'integer',
        'status' => 'string',
        'type' => 'string',
        'visibility' => 'string',
    ];

    // Automatski generiše URL slike ako postoji
    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : asset('images/default-store-logo.png');
    }
}


