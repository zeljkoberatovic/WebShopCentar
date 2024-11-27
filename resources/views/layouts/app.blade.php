<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head') 
</head>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
   
<main>
    @yield('content') 
</main>

    @include('layouts.footer')

<!-- Popper.js za pozicioniranje -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        crossorigin="anonymous"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        crossorigin="anonymous"></script>

<!-- Laravel Vite JS ako ga koristite -->
@vite('resources/js/app.js')

  </body>
</html>