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

<section class="marketplace" aria-label="Marketplace - Pregled prodavnica">
    <div class="container">
        <h2 class="marketplace-title">Naše Prodavnice</h2>
        <div class="store-grid">
            <!-- Primer jedne prodavnice (kartice) -->
            <div class="store-card">
                <img src="store1.jpg" alt="Prodavnica 1" class="store-image">
                <h3 class="store-name">Prodavnica 1</h3>
                <p class="store-description">Najbolji izbor za vas!</p>
            </div>
            <div class="store-card">
                <img src="store2.jpg" alt="Prodavnica 2" class="store-image">
                <h3 class="store-name">Prodavnica 2</h3>
                <p class="store-description">Vaš omiljeni brend.</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div><div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div><div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div><div class="store-card">
                <img src="store3.jpg" alt="Prodavnica 3" class="store-image">
                <h3 class="store-name">Prodavnica 3</h3>
                <p class="store-description">Kupujte sa stilom!</p>
            </div>
            <!-- Dodajte još prodavnica ovde -->
        </div>
    </div>
    <button class="test-button" id="test-button">Prikazi jos</button>

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
            <img src="latest-news-image.jpg" alt="Latest News" class="news-image">
            <div class="news-content">
                <h3>Uzbudljivo ažuriranje na našoj platformi</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a erat nec...</p>

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
   




