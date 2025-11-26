<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV. Restu Guru Promosindo — Percetakan modern dan profesional di Indonesia.">
    <meta name="theme-color" content="#e62129">
    <title>CV. Restu Guru Promosindo</title>

    <link rel="icon" type="image/png" href="{{ asset('images/restugurulogo.webp') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-800 bg-white selection:bg-[#fef100]/70 selection:text-black">

    {{-- Overlay Page Transition --}}
    <div id="overlay" class="fixed inset-0 bg-white z-[9999] opacity-100 pointer-events-none transition-opacity duration-700"></div>

    {{-- NAVBAR COMPONENT --}}
    <x-navbar />

    {{-- CONTENT --}}
    <main class="pt-20 relative z-10">
        @yield('content')
    </main>

    {{-- FOOTER COMPONENT --}}
    <x-footer />

    {{-- SCRIPT --}}
    <script>
        // Navbar Scroll Shadow
        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 60) navbar.classList.add("shadow-lg", "bg-white/90");
            else navbar.classList.remove("shadow-lg", "bg-white/90");
        });

        // Mobile Menu
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        menuBtn.addEventListener("click", () => mobileMenu.classList.toggle("hidden"));

        // Overlay Fade Transition
        window.addEventListener("load", () => {
            const overlay = document.getElementById("overlay");
            overlay.style.opacity = "0";
            setTimeout(() => overlay.remove(), 700);
        });

        // Smooth Page Transition
        const links = document.querySelectorAll("a[href]");
        links.forEach(link => {
            const url = link.getAttribute("href");

            if (!url.startsWith("#") && !url.startsWith("mailto:")) {
                link.addEventListener("click", e => {
                    e.preventDefault();
                    document.body.style.opacity = "0";
                    setTimeout(() => window.location = url, 400);
                });
            }
        });
    </script>

</body>
</html>
