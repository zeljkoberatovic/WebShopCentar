<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head') 
</head>

<body>
   
   
<main>
    @yield('content') 
</main>

   

<!-- Popper.js za pozicioniranje -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        crossorigin="anonymous"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
        crossorigin="anonymous"></script>

<!-- Laravel Vite JS ako ga koristite -->
@vite('resources/js/app.js')

<!-- Stack za dodatne skripte -->
@stack('scripts')
  </body>
</html>