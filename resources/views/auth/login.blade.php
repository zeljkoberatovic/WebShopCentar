@extends('layouts.auth')

@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
        <!-- Logo -->
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark">
                <span class="navbar-brand-text">WebShopCentar</span>
            </a>
        </div>

        <!-- Login Form -->
        <div class="card card-md mx-auto">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Prijavite se na svoj nalog</h2>
                <form method="POST" action="{{ route('login') }}" autocomplete="off" novalidate>
                    @csrf
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label class="form-label" for="email">Vaša email adresa</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="vaš@email.com">
                    </div>
                    
                    <!-- Password Field -->
                    <div class="mb-2">
                        <label class="form-label">
                            Lozinka
                            <span class="form-label-description">
                                <a href="{{ route('password.request') }}">Zaboravio/la sam lozinku</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Vaša lozinka" required>
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                    <!-- Eye Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Remember Me Checkbox -->
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                            <span class="form-check-label">Zapamti me na ovom uređaju</span>
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">Prijavite se</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Registration Link -->
        <div class="text-center text-secondary mt-3">
            Nemate još nalog? <a href="{{ route('register') }}" tabindex="-1">Registrujte se.</a>
        </div>
    </div>
</div>

@endsection
