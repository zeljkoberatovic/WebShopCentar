@extends('layouts.app')

@section('title', 'Pocetna')

@section('content')  

<section class="hero">
    <div class="hero__content">
        <h1>Tvoj Web Shop,tvoj biznis</h1>
        <p>Idealno mesto za tvoj novi početak – iznajmi prodavnicu i razvij svoj biznis vec danas!</p>
        <a href="#shop" class="hero__button">Počni sada</a>
    </div>
    <div class="hero__image">
        <picture>
            <source srcset="{{ asset('images/hero-img.webp') }}" type="image/webp">
            <img src="{{ asset('images/hero-img.jpg') }}" alt="Opis slike">
        </picture>
    </div>
</section>


<section class="home">
    <div class="container">
        <h1 class="text-center mb-5">Istaknute Prodavnice</h1>
        <div class="store-flex-container">
            @foreach ($stores as $store)
                <div class="store-card">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $store->image }}" class="card-img-top" alt="{{ $store->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $store->name }}</h5>
                            <p class="card-text text-truncate" title="{{ $store->description }}">{{ $store->description }}</p>
                            <p class="text-muted mb-4">📍 {{ $store->location }}</p>
                            <a href="#" class="btn btn-primary mt-auto">Saznaj više</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        @if ($stores->count() >= 10)
            <div class="text-center mt-4">
                <a href="{{ route('stores') }}" class="btn btn-outline-primary">Pogledaj sve prodavnice</a>
            </div>
        @endif
    </div>
</section>

<section class="vision-mission">
    <div class="container">
        <h2>Naša misija i vizija</h2>

        <div class="mission">
            <p>Naša <strong>Misija</strong>  je pomoći malim preduzetnicima i trgovcima da lako postave svoje online prodavnice. Obezbeđujemo jednostavan i efikasan način da povežu svoje proizvode sa globalnim kupcima.</p>
        </div>

        <div class="vision">
            <p>Naša <strong>Visija</strong> je postati lider u online trgovini, omogućavajući malim preduzetnicima da rastu i razvijaju svoje biznise širom sveta uz pomoć našeg inovativnog sistema.</p>
        </div>

        <div class="values">
            <h3>Naše vrednosti</h3>
            <ul>
                <li><strong>Jednostavnost:</strong> Omogućavamo jednostavan proces postavljanja prodavnice.</li>
                <li><strong>Transparentnost:</strong> Jasno komuniciramo sa korisnicima, bez skrivenih naknada.</li>
                <li><strong>Podrška:</strong> Naša korisnička podrška je tu za vas u svakom trenutku.</li>
            </ul>
        </div>
        
        <div class="cta">
            <a href="/register" class="btn-primary">Pogledajte nasu ponudu</a>
        </div>
    </div>
</section>

<section class="latest-news">
    <div class="container">
        <h2>Latest News</h2>
        <div class="news-feature">
            <!-- Picture element za prilagodljive slike -->
            <picture>
                <source srcset="{{ asset('images/road.webp') }}" type="image/webp">
                <img 
                    src="{{ asset('images/road.jpg') }}" 
                    alt="Opis slike" 
                    class="news-image">
            </picture>
            <!-- Tekstualni sadržaj vijesti -->
            <div class="news-content">
                <h3>Uzbudljivo ažuriranje na našoj platformi</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad accusantium laboriosam natus asperiores officia. Aliquam, debitis voluptatem dolorem ducimus quidem officiis tempora deserunt ea quisquam molestias maxime natus corrupti molestiae fugiat adipisci illum cumque accusamus? Vel omnis earum animi dicta!</p>
                <a href="/blog/latest-post" class="btn-primary">Read More</a>
            </div>
        </div>
    </div>
</section>


<section class="newsletter">
    <div class="container">
        <h2>Budite u toku!</h2>
        <p>Pretplatite se na naš newsletter i primajte najnovije vesti, ažuriranja i ekskluzivne ponude.</p>

        <form action="/subscribe" method="post" class="newsletter-form">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit" class="btn-primary">Subscribe</button>
        </form>
    </div>
</section>

@endsection
   




