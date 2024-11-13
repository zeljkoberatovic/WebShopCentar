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



    
  </body>
</html>