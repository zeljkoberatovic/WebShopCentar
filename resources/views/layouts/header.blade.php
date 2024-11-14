<header class="header-section">
    <div class="header-section__auth">
        <div class="header-section__auth-links">
            @guest
                <a href="#" class="auth-link">Prijava</a>
                <a href="#" class="auth-link">Registracija</a>
            @endguest
            
            @auth
                <span class="auth-welcome">Dobrodošli, {{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" 
                   class="auth-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
</header>
