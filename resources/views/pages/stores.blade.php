@extends('layouts.app')

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Carousel
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel</h3>
            </div>
            <div class="card-body">
              <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/brainstorming-session-with-creative-designers.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/young-woman-working-in-a-cafe.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/everything-you-need-to-work-from-your-bed.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with controls</h3>
            </div>
            <div class="card-body">
              <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/group-of-people-sightseeing-in-the-city.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/color-palette-guide-sample-colors-catalog-.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/stylish-workplace-with-computer-at-home.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/pink-desk-in-the-home-office.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with captions</h3>
            </div>
            <div class="card-body">
              <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/coffee-on-a-table-with-other-items.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/young-entrepreneur-working-from-a-modern-cafe-2.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/soft-photo-of-woman-on-the-bed-with-the-book-and-cup-of-coffee-in-hands.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/fairy-lights-at-the-beach-in-bulgaria.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/woman-working-on-laptop-at-home-office.jpg">
                    <div class="carousel-caption-background d-none d-md-block"></div>
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Slide label</h3>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with dot indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-dot" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-dot">
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/modern-home-office.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/blond-using-her-laptop-at-her-bedroom.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/tropical-palm-leaves-floral-pattern-background.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/woman-read-book-and-drink-coffee.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/book-on-the-grass.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with thumbnail indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-thumb" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-thumb">
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0" class=" ratio ratio-4x3 active" style="background-image: url(./static/photos/colorful-exotic-flowers-and-greenery.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1" class=" ratio ratio-4x3" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2" class=" ratio ratio-4x3" style="background-image: url(./static/photos/city-lights-reflected-in-the-water-at-night.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3" class=" ratio ratio-4x3" style="background-image: url(./static/photos/cryptocurrency-bitcoin-coins.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="4" class=" ratio ratio-4x3" style="background-image: url(./static/photos/woman-read-book-and-drink-coffee-2.jpg)"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/colorful-exotic-flowers-and-greenery.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/workplace-with-laptop-on-table-at-home.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/city-lights-reflected-in-the-water-at-night.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/cryptocurrency-bitcoin-coins.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/woman-read-book-and-drink-coffee-2.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with vertical dot indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-dot-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-dot">
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="0" class=" active"></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="1" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="2" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="3" class=""></button>
                  <button type="button" data-bs-target="#carousel-indicators-dot-vertical" data-bs-slide-to="4" class=""></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/friends-at-a-restaurant-drinking-wine.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/beautiful-blonde-woman-on-a-wooden-pier-by-the-lake.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/white-apple-imac-computer-with-elephant-mousepad.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/workplace-with-laptop-on-table-at-home-2.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/working-in-a-restaurant-macbook-cheese-cake-and-cup-of-coffee.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousel with thumbnail indicators</h3>
            </div>
            <div class="card-body">
              <div id="carousel-indicators-thumb-vertical" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators carousel-indicators-vertical carousel-indicators-thumb">
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="0" class=" ratio ratio-4x3 active" style="background-image: url(./static/photos/tropical-palm-leaves-floral-pattern-background.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="1" class=" ratio ratio-4x3" style="background-image: url(./static/photos/woman-read-book-and-drink-coffee.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="2" class=" ratio ratio-4x3" style="background-image: url(./static/photos/book-on-the-grass.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="3" class=" ratio ratio-4x3" style="background-image: url(./static/photos/colorful-exotic-flowers-and-greenery.jpg)"></button>
                  <button type="button" data-bs-target="#carousel-indicators-thumb-vertical" data-bs-slide-to="4" class=" ratio ratio-4x3" style="background-image: url(./static/photos/workplace-with-laptop-on-table-at-home.jpg)"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" alt="" src="./static/photos/tropical-palm-leaves-floral-pattern-background.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/woman-read-book-and-drink-coffee.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/book-on-the-grass.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/colorful-exotic-flowers-and-greenery.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" alt="" src="./static/photos/workplace-with-laptop-on-table-at-home.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
