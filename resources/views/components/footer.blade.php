<footer class="mt-20 bg-[#fafafa] border-t border-gray-200/60 pt-14 pb-10">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-14">

        <!-- LOGO + TAGLINE -->
        <div class="text-center md:text-left">
            <img src="{{ asset('images/restugurulogo.webp') }}"
                 class="h-12 mb-4 mx-auto md:mx-0 soft-float" alt="Logo">

            <h3 class="text-lg font-semibold text-gray-900">
                CV. Restu Guru Promosindo
            </h3>

            <p class="text-gray-500 text-sm mt-2 leading-relaxed max-w-xs">
                Percetakan modern berbasis teknologi dengan fokus pada kualitas,
                presisi, dan pelayanan profesional.
            </p>

            <!-- JAM OPERASIONAL -->
            <div class="mt-5">
                <h4 class="font-semibold text-gray-900 mb-1 text-sm">Jam Operasional</h4>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Senin – Sabtu: 08.00 – 17.00 <br>
                    Minggu & Hari Besar: Tutup
                </p>
            </div>
        </div>


        <!-- NAVIGASI -->
        <div class="text-center md:text-left">
            <h4 class="font-semibold text-gray-900 mb-4">Navigasi</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('home') }}" class="footer-link rg-hover">Home</a></li>
                <li><a href="{{ route('about') }}" class="footer-link rg-hover">Tentang</a></li>
                <li><a href="{{ route('services') }}" class="footer-link rg-hover">Layanan</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link rg-hover">Kontak</a></li>
            </ul>
        </div>


        <!-- LAYANAN -->
        <div class="text-center md:text-left">
            <h4 class="font-semibold text-gray-900 mb-4">Layanan</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('services') }}" class="footer-link rg-hover">Indoor Printing</a></li>
                <li><a href="{{ route('services') }}" class="footer-link rg-hover">Outdoor Printing</a></li>
                <li><a href="{{ route('services') }}" class="footer-link rg-hover">Merch & Multi Product</a></li>
            </ul>
        </div>


        <!-- SOSIAL + MULTI LOKASI -->
        <div class="text-center md:text-left">

            <!-- SOSIAL MEDIA -->
            <h4 class="font-semibold text-gray-900 mb-4">Ikuti Kami</h4>
            <ul class="space-y-2 text-sm text-gray-600 mb-6">
                <li>
                    <a href="#" class="footer-link flex items-center gap-2 md:justify-start justify-center rg-hover">
                        <span>📘</span> Facebook
                    </a>
                </li>
                <li>
                    <a href="#" class="footer-link flex items-center gap-2 md:justify-start justify-center rg-hover">
                        <span>📷</span> Instagram
                    </a>
                </li>
                <li>
                    <a href="#" class="footer-link flex items-center gap-2 md:justify-start justify-center rg-hover">
                        <span>▶️</span> YouTube
                    </a>
                </li>
            </ul>

            <!-- MULTI LOKASI -->
            <h4 class="font-semibold text-gray-900 mb-2 text-sm">Lokasi Kantor</h4>

            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Banjarbaru</li>
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Banjar</li>
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Banjarmasin</li>
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Martapura</li>
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Lianganggang</li>
                <li class="flex gap-2 md:justify-start justify-center"><span>📍</span> Pelaihari</li>
            </ul>
        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="text-center mt-12 pt-6 border-t border-gray-200">
        <div class="w-32 h-1 mx-auto mb-4 rounded-full rg-bar"></div>

        <p class="text-gray-400 text-xs">
            © {{ date('Y') }} Restu Guru Promosindo — All rights reserved.
        </p>
    </div>

</footer>
