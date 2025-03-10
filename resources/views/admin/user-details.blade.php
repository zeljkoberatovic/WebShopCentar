@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detalji korisnika: {{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        <p>Uloga: {{ $user->role }}</p>
        <p>Datum registracije: {{ $user->created_at->format('d M Y') }}</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Nazad na listu</a>
    </div>
@endsection
