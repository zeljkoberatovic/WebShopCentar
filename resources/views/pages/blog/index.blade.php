@extends('layouts.app')

@section('content')
   
<main class="container">
    <!-- Najnovija vijest -->
    <section class="latest-news">
        <h2 class="section-title">Najnovije Vijesti</h2>
        <div class="featured-news">
            <img src="latest-news.jpg" alt="Najnovija vijest" class="featured-image">
            <div class="featured-content">
                <h3>Naslov najnovije vijesti</h3>
                <p>Kratak opis najnovije vijesti sa ključnim informacijama. Ova sekcija prikazuje najvažnije događaje.</p>
                <a href="#" class="btn btn-read-more">Pročitaj više</a>
            </div>
        </div>
    </section>

    <!-- Ostale vijesti -->
    <section class="other-news">
        <h2 class="section-title">Ostale Vijesti</h2>
        <div class="news-grid">

            <div class="news-card">
                <x-picture path="images/road" alt="Opis slike" class="news-image">
                </x-picture>
                    <h3>Naslov vijesti 1</h3>
                    <p>Kratak opis sadržaja ove vijesti.</p>
                    <a href="#" class="btn btn-read-more">Pročitaj više</a>
                </div>
            
            
            <div class="news-card">
                <img src="news2.jpg" alt="Vijest 2" class="news-image">
                <h3>Naslov vijesti 2</h3>
                <p>Kratak opis sadržaja ove vijesti.</p>
                <a href="#" class="btn btn-read-more">Pročitaj više</a>
            </div>
            <div class="news-card">
                <img src="news3.jpg" alt="Vijest 3" class="news-image">
                <h3>Naslov vijesti 3</h3>
                <p>Kratak opis sadržaja ove vijesti.</p>
                <a href="#" class="btn btn-read-more">Pročitaj više</a>
            </div>
            <div class="news-card">
                <img src="news4.jpg" alt="Vijest 4" class="news-image">
                <h3>Naslov vijesti 4</h3>
                <p>Kratak opis sadržaja ove vijesti.</p>
                <a href="#" class="btn btn-read-more">Pročitaj više</a>
            </div>
        </div>
    </section>
</main>

    
   
@endsection
