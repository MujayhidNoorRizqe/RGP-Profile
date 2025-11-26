<nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-white/80 backdrop-blur-lg shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 hover:opacity-90 transition">
            <img src="{{ asset('images/restugurulogo.webp') }}" alt="RG Promosindo Logo" class="h-10 w-auto">
            <span class="font-semibold text-lg text-[#e62129] tracking-wide">Restu Guru Promosindo</span>
        </a>

        {{-- Desktop Menu --}}
        <ul class="hidden md:flex space-x-8 text-sm font-medium">
            <li><a href="{{ route('home') }}" class="hover:text-[#e62129] transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-[#e62129] transition">Tentang</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-[#e62129] transition">Layanan</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-[#e62129] transition">Kontak</a></li>
        </ul>

        {{-- Mobile Menu Button --}}
        <button id="menu-btn" class="md:hidden">
            <i class="fa-solid fa-bars text-2xl text-[#e62129]"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
        <ul class="flex flex-col items-center py-4 space-y-4 text-sm font-medium">
            <li><a href="{{ route('home') }}" class="hover:text-[#e62129] transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-[#e62129] transition">Tentang</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-[#e62129] transition">Layanan</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-[#e62129] transition">Kontak</a></li>
        </ul>
    </div>
</nav>
