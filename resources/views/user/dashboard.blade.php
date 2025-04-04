@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Dobrodošli, {{ $user->name }}</h2>
    
        <div class="bg-white rounded-xl shadow p-6">
            <p><strong>Ime:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Registrovan:</strong> {{ $user->created_at->format('d.m.Y.') }}</p>
            {{-- Dodaj još ako imaš custom polja --}}
        </div>
    </div>

@endsection