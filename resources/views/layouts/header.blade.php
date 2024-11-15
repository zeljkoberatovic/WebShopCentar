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

            <!-- Dropdown za izbor jezika -->
            <div class="language-selector">
                <select id="language" class="language-dropdown">
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="de">Deutsch</option>
                </select>
            </div>
        </div>
    </div>
</header>
