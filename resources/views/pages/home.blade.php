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



@endsection
   




