<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Web Shop Centar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"     aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Pocetna</a>
          <a class="nav-link" href="{{ route('stores.index')}}">Prodavnice</a>
          <a class="nav-link" href="{{ route('offers') }}">Ponuda</a>
          <a class="nav-link" href="#">O nam</a>
          <a class="nav-link" href="#">Blog</a>
        </div>
  </div>
</nav>
