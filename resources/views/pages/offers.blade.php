@extends('layouts.app')
@section('title', 'Naša ponuda')
@section('content')

<section class="offers">
    <div class="container">
        <!-- Naslov i uvod -->
        <header class="offers-header text-center mb-5">
            <h1>Naša ponuda</h1>
            <p>Odaberite paket koji najbolje odgovara vašem biznisu. Naš tim je tu da vas podrži u svakom koraku.</p>
        </header>

        <!-- Paketi ponuda -->
        <div class="row text-center mb-5">
            <!-- Paket 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3>Osnovni paket</h3>
                    </div>
                    <div class="card-body">
                        <p>Idealno za male biznise.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Kreiranje web prodavnice</li>
                            <li><i class="bi bi-check-circle text-success"></i> Osnovna podrška</li>
                            <li><i class="bi bi-check-circle text-success"></i> 5 proizvoda</li>
                        </ul>
                        <p class="price"><strong>€50 mesečno</strong></p>
                    </div>
                </div>
            </div>

            <!-- Paket 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h3>Napredni paket</h3>
                    </div>
                    <div class="card-body">
                        <p>Za rastuće biznise.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Kreiranje i održavanje</li>
                            <li><i class="bi bi-check-circle text-success"></i> Marketing podrška</li>
                            <li><i class="bi bi-check-circle text-success"></i> 20 proizvoda</li>
                        </ul>
                        <p class="price"><strong>€100 mesečno</strong></p>
                    </div>
                </div>
            </div>

            <!-- Paket 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h3>Premium paket</h3>
                    </div>
                    <div class="card-body">
                        <p>Za velike biznise.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Kompletno rešenje</li>
                            <li><i class="bi bi-check-circle text-success"></i> SEO optimizacija</li>
                            <li><i class="bi bi-check-circle text-success"></i> Neograničeni proizvodi</li>
                        </ul>
                        <p class="price"><strong>€200 mesečno</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kontakt forma -->
        <section class="contact-form mt-5">
            <h2 class="text-center">Imate pitanje? Kontaktirajte nas!</h2>
            <form action="/contact" method="POST" class="mt-4">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Vaše ime" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Vaš email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" rows="4" placeholder="Vaša poruka" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Pošaljite</button>
                </div>
            </form>
        </section>
    </div>
</section>

@endsection
