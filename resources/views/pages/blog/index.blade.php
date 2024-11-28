@extends('layouts.app')

@section('content')
   


<!-- Sekcija Blog Stranice -->
<section class="section-b-space blog-page ratio2_3">
    <div class="container">
        <div class="row">
            <!-- Glavni dio -->
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="row">
                    <!-- Prva vijest -->
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-card ">
                            <div class="blog-card-image ">
                                <a href="#"><img src="images/road.webp" class="img-fluid" alt="Vijest 1"></a>
                            </div>
                            <div class="blog-card-content">
                                <h6>25. januar 2024.</h6>
                                <a href="#">
                                    <h4>Kako tehnologija mijenja naš svakodnevni život</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Autor: Admin</li>
                                    <li><i class="fa fa-heart"></i> 12 pregleda</li>
                                    <li><i class="fa fa-comments"></i> 8 komentara</li>
                                </ul>
                                <p>Tehnološki napredak značajno je uticao na način na koji živimo i radimo. Otkrijte koje promjene nas očekuju u bliskoj budućnosti.</p>
                                <a href="#" class="read-more">Pročitaj više</a>
                            </div>
                        </div>
                    </div>

                    <!-- Druga vijest -->
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-card featured">
                            <div class="blog-card-image">
                                <a href="#"><img src="slika2.jpg" class="img-fluid" alt="Vijest 2"></a>
                            </div>
                            <div class="blog-card-content">
                                <h6>20. januar 2024.</h6>
                                <a href="#">
                                    <h4>5 najboljih destinacija za putovanja u 2024. godini</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Autor: Admin</li>
                                    <li><i class="fa fa-heart"></i> 45 pregleda</li>
                                    <li><i class="fa fa-comments"></i> 14 komentara</li>
                                </ul>
                                <p>Planirate putovanje? Otkrijte koje destinacije su ove godine u trendu i zašto ih ne smijete propustiti.</p>
                                <a href="#" class="read-more">Pročitaj više</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Treća vijest -->
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-card featured">
                            <div class="blog-card-image">
                                <a href="#"><img src="slika3.jpg" class="img-fluid" alt="Vijest 3"></a>
                            </div>
                            <div class="blog-card-content">
                                <h6>15. januar 2024.</h6>
                                <a href="#">
                                    <h4>Uticaj zdrave ishrane na produktivnost</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Autor: Admin</li>
                                    <li><i class="fa fa-heart"></i> 30 pregleda</li>
                                    <li><i class="fa fa-comments"></i> 20 komentara</li>
                                </ul>
                                <p>Saznajte kako pravilna ishrana može poboljšati vašu energiju, koncentraciju i opće zdravlje.</p>
                                <a href="#" class="read-more">Pročitaj više</a>
                            </div>
                        </div>
                    </div>

                    <!-- Četvrta vijest -->
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-card featured">
                            <div class="blog-card-image">
                                <a href="#"><img src="slika4.jpg" class="img-fluid" alt="Vijest 4"></a>
                            </div>
                            <div class="blog-card-content">
                                <h6>10. januar 2024.</h6>
                                <a href="#">
                                    <h4>Razvoj vještina za uspješnu karijeru</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Autor: Admin</li>
                                    <li><i class="fa fa-heart"></i> 60 pregleda</li>
                                    <li><i class="fa fa-comments"></i> 25 komentara</li>
                                </ul>
                                <p>Koje vještine su ključne za uspjeh u 2024. godini? Naučite kako unaprijediti svoje profesionalne kompetencije.</p>
                                <a href="#" class="read-more">Pročitaj više</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bočna traka -->
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="blog-sidebar">
                    <div class="theme-card">
                        <h4>Najnoviji blogovi</h4>
                        <ul class="recent-blog">
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="slika5.jpg" alt="Najnoviji blog">
                                    <div class="media-body align-self-center">
                                        <h6>24. januar 2024.</h6>
                                        <p>20 pregleda</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="slika6.jpg" alt="Najnoviji blog">
                                    <div class="media-body align-self-center">
                                        <h6>23. januar 2024.</h6>
                                        <p>15 pregleda</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="theme-card">
                        <h4>Popularni blogovi</h4>
                        <ul class="popular-blog">
                            <li>
                                <div class="media">
                                    <div class="blog-date">
                                        <span>01</span>
                                        <span>januar</span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Najbolji savjeti za štednju</h6>
                                        <p>100 pregleda</p>
                                    </div>
                                </div>
                                <p>Kako ostvariti veće uštede u 2024. godini? Pronađite savjete koji vam mogu pomoći.</p>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="blog-date">
                                        <span>28</span>
                                        <span>decembar</span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6>Trendovi u modi za 2024. godinu</h6>
                                        <p>75 pregleda</p>
                                    </div>
                                </div>
                                <p>Otkrijte šta je u modi ove sezone i kako osvježiti svoj stil.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
   
@endsection
