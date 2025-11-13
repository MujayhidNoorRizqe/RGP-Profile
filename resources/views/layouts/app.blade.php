<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV. Restu Guru Promosindo — Layanan percetakan, printing, dan advertising profesional.">
    <meta name="theme-color" content="#e62129">
    <title>CV. Restu Guru Promosindo</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/restugurulogo.webp') }}">

    {{-- Tailwind & Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html { scroll-behavior: smooth; }
        body { background-color: #fff; overflow-x: hidden; }

        /* ====== KEYFRAMES ANIMASI ====== */
        @keyframes fadeSlideDown {
            0% { opacity: 0; transform: translateY(-25px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(40px); filter: blur(10px); }
            100% { opacity: 1; transform: translateY(0); filter: blur(0); }
        }
        @keyframes fadeInCinematic {
            0% { opacity: 0; filter: blur(25px) brightness(0.5); }
            100% { opacity: 1; filter: blur(0) brightness(1); }
        }
        @keyframes fadeOverlay {
            0% { opacity: 1; }
            100% { opacity: 0; visibility: hidden; }
        }

        /* ====== KELAS ANIMASI ====== */
        .animate-navbar {
            animation: fadeSlideDown 1.4s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }
        .animate-page {
            animation: fadeInCinematic 1.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        /* ====== TRANSISI ANTAR HALAMAN ====== */
        body {
            opacity: 0;
            transition: opacity 0.8s ease-in-out, filter 0.8s ease-in-out;
        }
        body.loaded {
            opacity: 1;
            filter: blur(0);
        }
        .fade-out {
            opacity: 0;
            filter: blur(20px);
            transition: opacity 0.8s ease, filter 0.8s ease;
        }

        /* Overlay Cinematic Saat Reload */
        #overlay {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at center, #000 0%, #111 100%);
            z-index: 9999;
            animation: fadeOverlay 1s ease-out forwards;
            pointer-events: none;
        }
    </style>
</head>

<body class="antialiased text-gray-800 selection:bg-[#fef100]/70 selection:text-black">

    {{-- OVERLAY RELOAD --}}
    <div id="overlay"></div>

    {{-- NAVBAR --}}
    <nav id="navbar"
         class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 opacity-0 animate-navbar transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 hover:opacity-90 transition">
                <img src="{{ asset('images/restugurulogo.webp') }}" alt="Logo RG Promosindo" class="h-10 w-auto">
                <span class="font-bold text-lg text-[#e62129]">Restu Guru Promosindo</span>
            </a>

            {{-- Menu Desktop --}}
            <ul class="hidden md:flex space-x-8 text-sm font-medium">
                <li><a href="{{ route('home') }}" class="hover:text-[#e62129] transition">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-[#e62129] transition">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-[#e62129] transition">Layanan</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#e62129] transition">Kontak</a></li>
            </ul>

            {{-- Tombol Mobile --}}
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Menu Mobile --}}
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <ul class="flex flex-col items-center py-4 space-y-3 text-sm font-medium">
                <li><a href="{{ route('home') }}" class="hover:text-[#e62129] transition">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-[#e62129] transition">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-[#e62129] transition">Layanan</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#e62129] transition">Kontak</a></li>
            </ul>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="pt-20">
        {{-- Efek Cinematic Page --}}
        <div id="page-wrapper" class="opacity-0 animate-page">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-[#00a2e9] text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-sm">
                © {{ date('Y') }} CV. Restu Guru Promosindo. All rights reserved.
            </p>
        </div>
    </footer>

    {{-- SCRIPT --}}
    <script>
        // Toggle menu mobile
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => menu.classList.toggle('hidden'));

        // Navbar shadow saat scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md', 'bg-white');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });

        // Fade-in cinematic saat halaman dimuat
        window.addEventListener("load", () => {
            document.body.classList.add("loaded");
        });

        // Fade-out cinematic antar halaman
        const links = document.querySelectorAll("a[href]");
        links.forEach(link => {
            const url = link.getAttribute("href");
            if (!url.startsWith("#") && !url.startsWith("mailto:") && !url.startsWith("javascript:")) {
                link.addEventListener("click", e => {
                    e.preventDefault();
                    document.body.classList.add("fade-out");
                    setTimeout(() => {
                        window.location = url;
                    }, 700);
                });
            }
        });
    </script>
</body>
</html>
