@extends('layouts.auth')

@section('content')

<!-- Početak stranice sa formom za prijavu -->
<div class="page page-center">
    <div class="container container-tight col-12 col-sm-10 col-md-8 col-xl-6 col-xxl-6 py-4">

        <!-- Logo stranice - Klikom na logo korisnik se vraća na početnu stranicu -->
        <div class="text-center mb-4">
            <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
                <span class="navbar-brand-text">WebShopCentar</span>
            </a>
        </div>

        <!-- Početak forme za prijavu -->
        <div class="card card-md mx-auto">
            <div class="card-body ">

                <!-- Naslov forme -->
                <h2 class="h2 text-center mb-4">Prijavite se na svoj nalog</h2>

                <!-- Forma za prijavu -->
                <form method="POST" action="{{ route('login') }}" autocomplete="off" novalidate>
                    @csrf <!-- CSRF zaštita za formu -->

                    <!-- Polje za unos email adrese -->
                    <div class="mb-3">
                        <label class="form-label" for="email">Vaša email adresa</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            placeholder="vaš@email.com"
                        >

                        <!-- Prikazivanje greške ako postoji greška za email -->
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Polje za unos lozinke -->
                    <div class="mb-2">
                        <label class="form-label">
                            Lozinka
                            <span class="form-label-description">
                                <!-- Link ka stranici za zaboravljenu lozinku -->
                                <a href="{{ route('password.request') }}">Zaboravio/la sam lozinku</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Vaša lozinka" 
                                required
                            >

                            <!-- Ikona oka koja omogućava korisnicima da vide lozinku -->
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Prikaži lozinku" id="toggle-password">
                                    <!-- Ikona oka -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>

                        <!-- Prikazivanje greške ako postoji greška za lozinku -->
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Polje za zapamćivanje na uređaju (Remember me checkbox) -->
                    <div class="mb-2">
                        <label class="form-check">
                            <input 
                                type="checkbox" 
                                name="remember" 
                                id="remember_me" 
                                class="form-check-input">
                            <span class="form-check-label">Zapamti me na ovom uređaju</span>
                        </label>
                    </div>
                    
                    <!-- Dugme za prijavu -->
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

        <!-- Link za registraciju ako korisnik još nema nalog -->
        <div class="text-center text-secondary mt-3">
            Nemate još nalog? <a href="{{ route('register') }}" tabindex="-1">Registrujte se.</a>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggle-password').addEventListener('click', function (e) {
        e.preventDefault();
        const passwordField = document.getElementById('password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            this.title = 'Sakrij lozinku';
        } else {
            passwordField.type = 'password';
            this.title = 'Prikaži lozinku';
        }
    });
</script>

@endsection
