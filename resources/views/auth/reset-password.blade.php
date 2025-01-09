<!-- resources/views/auth/reset-password.blade.php -->
@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Nova lozinka</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Potvrdite novu lozinku</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Resetuj lozinku</button>
    </form>
@endsection
