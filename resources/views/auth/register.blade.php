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

            <!-- Registration Form -->
            <form class="card card-md" method="POST" action="{{ route('register') }}" autocomplete="off" novalidate>
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Kreirajte novi nalog</h2>
                    
                    <!-- Name Input -->
                    <div class="mb-3">
                        <label class="form-label">Vaše ime</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required placeholder="Unesite ime">
                    </div>
                    
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label class="form-label">Email adresa</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required placeholder="Unesite email">
                    </div>
                    
                    <!-- Password Input -->
                    <div class="mb-3">
                        <label class="form-label">Lozinka</label>
                        <input type="password" class="form-control" name="password" required placeholder="Unesite lozinku">
                    </div>
                    
                    <!-- Confirm Password Input -->
                    <div class="mb-3">
                        <label class="form-label">Potvrdite lozinku</label>
                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Potvrdite lozinku">
                    </div>
                    
                    <!-- Terms and Policy -->
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="terms" value="1" required/>
                            <span class="form-check-label">Slažem se sa <a href="./terms-of-service.html" tabindex="-1">uslovima i pravilima</a>.</span>
                        </label>
                            @error('terms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Kreirajte novi nalog</button>
                    </div>
                </div>
            </form>
            
            <!-- Login Link -->
            <div class="text-center text-secondary mt-3">
                Već imate nalog? <a href="./sign-in.html" tabindex="-1">Prijavite se</a>
            </div>
        </div>
    </div>
@endsection
