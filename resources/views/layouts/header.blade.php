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
                    <option value="me" selected> Mne </option>
                    <option value="en"> Eng</option>
                    <option value="es"> Esp</option>
                    <option value="fr"> Fra</option>
                    <option value="ru"> Rus</option>
                </select>
            </div>
        </div>
    </div>
</header>
