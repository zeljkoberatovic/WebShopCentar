@extends('layouts.auth')

@section('content')
<div class="page page-center">
    <!-- Početni kontejner sa skaliranjem za različite uređaje -->
    <div class="container container-tight col-12 col-sm-10 col-md-8 col-xl-6 col-xxl-6 py-4">
        
        <!-- Logo i naziv sajta -->
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark">
                <span class="navbar-brand-text">WebShopCentar</span>
            </a>
        </div>

        <!-- Kartica za resetovanje lozinke -->
        <div class="card card-md">
            <div class="card-body">
                <!-- Naslov sekcije za resetovanje lozinke -->
                <h2 class="h2 text-center mb-4">Zaboravili ste lozinku?</h2>

                <!-- Forma za unos email adrese i slanje zahteva za resetovanje lozinke -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Polje za unos email adrese korisnika -->
                    <div class="mb-3">
                        <label class="form-label" for="email">Vaša email adresa</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="vaš@email.com" 
                            required
                        >
                    </div>

                    <!-- Prikazivanje status poruke ako postoji -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Prikazivanje grešaka ako postoje -->
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Dugme za slanje forme -->
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
    </div>
</div>
@endsection
