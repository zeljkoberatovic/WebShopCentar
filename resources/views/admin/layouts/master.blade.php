
@vite('resources/css/app.css')

   
  <div class="page">
        <!-- Navbar -->
        @include('admin.layouts.header')
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        
        <div class="page-wrapper">
          
          @yield('content')

        <!-- Footer -->
        @include('admin.layouts.footer')    
        </div>
    </div>

   
@vite('resources/js/app.js')
    
