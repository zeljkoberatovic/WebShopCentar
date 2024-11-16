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




@endsection
   




