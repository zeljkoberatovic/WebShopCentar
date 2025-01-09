@extends('layouts.app')

@section('content')
<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Prijavite se</button>
            </div>
        </div>
    </div>
</form>


@endsection
