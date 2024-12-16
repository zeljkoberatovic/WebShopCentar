@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="remember_me">
            <input type="checkbox" name="remember" id="remember_me">
            Remember Me
        </label>
    </div>

    <button type="submit">Login</button>

    <!-- Forgot Password Link -->
    <div>
        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>
</form>


@endsection
