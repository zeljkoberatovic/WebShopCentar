@extends('layouts.auth')

@section('content')
    <div class="page page-center">
        <div class="container container-tight col-12 col-sm-10 col-md-8 col-xl-6 col-xxl-6 py-4">
            <!-- Logo -->
            <div class="text-center mb-4">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
                    <span class="navbar-brand-text">WebShopCentar</span>
                </a>
            </div>

            <!-- Forma za registraciju -->
            <form class="card card-md" method="POST" action="{{ route('register') }}" autocomplete="off" novalidate>
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Kreirajte novi nalog</h2>
                    
                    <!-- Polje za ime -->
                    <div class="mb-3">
                        <label class="form-label">Vaše ime</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required placeholder="Unesite ime">
                    </div>
                    
                    <!-- Polje za email adresu -->
                    <div class="mb-3">
                        <label class="form-label">Email adresa</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required placeholder="Unesite email">
                    </div>
                    
                    <!-- Polje za lozinku -->
                    <div class="mb-3">
                        <label class="form-label">Lozinka</label>
                        <input type="password" class="form-control" name="password" required placeholder="Unesite lozinku">
                    </div>
                    
                    <!-- Polje za potvrdu lozinke -->
                    <div class="mb-3">
                        <label class="form-label">Potvrdite lozinku</label>
                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Potvrdite lozinku">
                    </div>
                    
                    <!-- Polje za prihvatanje uslova i pravila -->
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="terms" value="1" required/>
                            <span class="form-check-label">Slažem se sa <a href="./terms-of-service.html" tabindex="-1">uslovima i pravilima</a>.</span>
                        </label>
                            @error('terms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    
                    <!-- Dugme za slanje forme -->
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">Kreirajte novi nalog</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <!-- Link za prijavu -->
            <div class="text-center text-secondary mt-3">
                Već imate nalog? <a href="{{ route('login') }}" tabindex="-1">Prijavite se</a>
            </div>
        </div>
    </div>
@endsection
