<nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur-lg transition-all duration-300 border-b border-transparent">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('images/restugurulogo.webp') }}"
                 class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">

            <span class="font-bold text-lg tracking-tight text-gray-900">
                Restu Guru Promosindo
            </span>
        </a>

        <!-- NAV LINKS (Desktop) -->
        <ul class="hidden md:flex items-center gap-8 text-sm font-medium">

            <li>
                <a href="{{ route('home') }}"
                   class="nav-link hover-glow {{ request()->is('/') ? 'nav-active-blue' : '' }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}"
                   class="nav-link hover-glow {{ request()->is('about') ? 'nav-active-red' : '' }}">
                    Tentang
                </a>
            </li>

            <li>
                <a href="{{ route('services') }}"
                   class="nav-link hover-glow {{ request()->is('services') ? 'nav-active-yellow' : '' }}">
                    Layanan
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}"
                   class="nav-link hover-glow {{ request()->is('contact') ? 'nav-active-blue' : '' }}">
                    Kontak
                </a>
            </li>

        </ul>

        <!-- MOBILE TOGGLE -->
        <button id="menu-btn" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700" fill="none"
                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu"
         class="hidden md:hidden bg-white/95 backdrop-blur-lg border-t border-gray-200 shadow-sm">
        <ul class="flex flex-col items-center py-4 space-y-5 text-sm font-medium">

            <li><a href="{{ route('home') }}" class="footer-link-mobile">Home</a></li>
            <li><a href="{{ route('about') }}" class="footer-link-mobile">Tentang</a></li>
            <li><a href="{{ route('services') }}" class="footer-link-mobile">Layanan</a></li>
            <li><a href="{{ route('contact') }}" class="footer-link-mobile">Kontak</a></li>

        </ul>
    </div>

</nav>
