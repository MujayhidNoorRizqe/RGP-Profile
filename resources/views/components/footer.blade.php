<footer class="bg-[#fafafa] border-t border-gray-200 pt-16 pb-10 mt-20">

    {{-- =====================================================
         DESKTOP FOOTER (md ke atas)
    ====================================================== --}}
    <div class="hidden md:grid max-w-7xl mx-auto px-6 md:grid-cols-4 gap-14">

        {{-- LOGO + TAGLINE --}}
        <div>
            <img src="{{ asset('images/restugurulogo.webp') }}"
                 class="h-14 mb-4 soft-float" alt="Logo">

            <h3 class="text-lg font-semibold text-gray-900">
                CV. Restu Guru Promosindo
            </h3>

            <p class="text-gray-500 text-sm mt-2 leading-relaxed max-w-xs">
                Percetakan modern berbasis teknologi dengan fokus pada kualitas,
                presisi, dan pelayanan profesional.
            </p>

            {{-- Jam Operasional --}}
            <div class="mt-5">
                <h4 class="font-semibold text-gray-900 mb-1 text-sm">Jam Operasional</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Senin – Sabtu: 08.00 – 17.00 <br>
                    Minggu & Hari Besar: Tutup
                </p>
            </div>
        </div>


        {{-- NAVIGASI --}}
        <div>
            <h4 class="font-semibold text-gray-900 mb-4">Navigasi</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="footer-link">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="footer-link">Layanan</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">Kontak</a></li>
            </ul>
        </div>


        {{-- LAYANAN --}}
        <div>
            <h4 class="font-semibold text-gray-900 mb-4">Layanan</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('services') }}" class="footer-link">Indoor Printing</a></li>
                <li><a href="{{ route('services') }}" class="footer-link">Outdoor Printing</a></li>
                <li><a href="{{ route('services') }}" class="footer-link">Merch & Multi Product</a></li>
            </ul>
        </div>


        {{-- SOSMED + LOKASI --}}
        <div>
            <h4 class="font-semibold text-gray-900 mb-4">Ikuti Kami</h4>
            <ul class="space-y-2 text-sm text-gray-600 mb-6">
                <li><a href="#" class="footer-link flex items-center gap-2"><span>📘</span> Facebook</a></li>
                <li><a href="#" class="footer-link flex items-center gap-2"><span>📷</span> Instagram</a></li>
                <li><a href="#" class="footer-link flex items-center gap-2"><span>▶️</span> YouTube</a></li>
            </ul>

            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Lokasi Kantor</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li>📍 Banjarbaru</li>
                <li>📍 Banjar</li>
                <li>📍 Banjarmasin</li>
                <li>📍 Martapura</li>
                <li>📍 Liang Anggang</li>
                <li>📍 Pelaihari</li>
            </ul>
        </div>

    </div>




    {{-- =====================================================
         MOBILE FOOTER (0–md)
    ====================================================== --}}
    <div class="md:hidden max-w-xl mx-auto px-6 space-y-12">

        {{-- LOGO --}}
        <div class="text-center">
            <img src="{{ asset('images/restugurulogo.webp') }}" class="h-14 mx-auto soft-float">
            <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                Percetakan modern dengan kualitas premium & pelayanan profesional.
            </p>
        </div>


        {{-- MENU --}}
        <div class="text-center">
            <h4 class="font-semibold text-gray-900 mb-4">Menu</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="footer-link">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="footer-link">Layanan</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">Kontak</a></li>
            </ul>
        </div>


        {{-- Sosmed --}}
        <div class="text-center">
            <h4 class="font-semibold text-gray-900 mb-4">Ikuti Kami</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="#" class="footer-link flex justify-center gap-2"><span>📘</span> Facebook</a></li>
                <li><a href="#" class="footer-link flex justify-center gap-2"><span>📷</span> Instagram</a></li>
                <li><a href="#" class="footer-link flex justify-center gap-2"><span>▶️</span> YouTube</a></li>
            </ul>
        </div>


        {{-- Lokasi --}}
        <div class="text-center">
            <h4 class="font-semibold text-gray-900 mb-4">Lokasi Kantor</h4>
            <ul class="space-y-1 text-sm text-gray-600">
                <li>📍 Banjarbaru</li>
                <li>📍 Banjar</li>
                <li>📍 Banjarmasin</li>
                <li>📍 Martapura</li>
                <li>📍 Liang Anggang</li>
                <li>📍 Pelaihari</li>
            </ul>
        </div>

    </div>




    {{-- COPYRIGHT --}}
    <div class="text-center mt-16 pt-6 border-t border-gray-200">
        <p class="text-gray-400 text-xs">
            © {{ date('Y') }} Restu Guru Promosindo — All rights reserved.
        </p>
    </div>

</footer>
