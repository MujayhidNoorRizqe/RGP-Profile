<footer class="w-full bg-white text-gray-700 mt-24 pt-10 pb-10">
    <!-- Top Shadow Divider -->
    <div
        class="w-full h-[1px] shadow-[0_-6px_16px_rgba(0,0,0,0.08)] mb-10"
    ></div>

    <div class="max-w-6xl mx-auto px-6">
        <!-- GRID -->
        <div class="grid grid-cols-4 gap-12 text-[14px]">
            <!-- BRAND -->
            <div class="flex items-start gap-4 col-span-1">
                <img
                    src="{{ asset('images/logo-restu-guru-promosindo.webp') }}"
                    class="h-12 w-auto object-contain mt-1"
                    alt="Logo"
                />

                <div class="flex flex-col">
                    <h3
                        class="text-lg font-semibold text-gray-900 leading-tight"
                    >
                        CV. Restu Guru Promosindo
                    </h3>

                    <p class="text-gray-500 text-sm tracking-wide mt-1">
                        Percetakan Modern & Profesional
                    </p>
                </div>
            </div>

            <!-- NAVIGASI -->
            <div>
                <h4
                    class="text-gray-900 text-xs font-semibold uppercase mb-3 tracking-wide"
                >
                    Navigasi
                </h4>

                <ul class="footer-nav space-y-2 text-gray-600 text-sm">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Tentang</a></li>
                    <li><a href="{{ route('services') }}">Layanan</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>

            <!-- LAYANAN -->
            <div>
                <h4
                    class="text-gray-900 text-xs font-semibold uppercase mb-3 tracking-wide"
                >
                    Layanan
                </h4>

                <ul class="footer-service space-y-2 text-gray-600 text-sm">
                    <li>
                        <a href="{{ route('services') }}">Indoor Printing</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">Outdoor Printing</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}"
                            >Merch & Multi Product</a
                        >
                    </li>
                </ul>
            </div>

            <!-- LOKASI -->
            <div>
                <h4
                    class="text-gray-900 text-xs font-semibold uppercase mb-3 tracking-wide"
                >
                    Lokasi Kantor
                </h4>

                <ul class="footer-location space-y-2 text-gray-600 text-sm">
                    <li>
                        <a
                            href="https://share.google/GzpL00MrJd6TbIAxL"
                            target="_blank"
                            >Banjarbaru</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://share.google/ehMxwll2Omvxy3lfs"
                            target="_blank"
                            >Banjarmasin</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://share.google/mFQHJPp4Zuz37EnQ3"
                            target="_blank"
                            >Martapura</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://share.google/ORm6DY2QUajm3OTXI"
                            target="_blank"
                            >Liang Anggang</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://share.google/JqIeeRNUiScfrJTDu"
                            target="_blank"
                            >Pelaihari</a
                        >
                    </li>
                </ul>
            </div>
        </div>

        <!-- DIVIDER -->
        <div class="border-t border-gray-200 mt-12 mb-8"></div>

        <!-- SOCIAL ICONS -->
        <div class="flex justify-center gap-5 mb-6">
            <!-- Instagram -->
            <a
                href="https://www.instagram.com/restugurupromosindo?igsh=OG1sZ2d3dTJ1cTIy"
                target="_blank"
                class="footer-social-instagram w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center transition"
            >
                <svg
                    class="w-4 h-4 text-gray-700 transition"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <rect x="3" y="3" width="18" height="18" rx="5" />
                    <circle cx="12" cy="12" r="4" />
                    <circle cx="17" cy="7" r="1" />
                </svg>
            </a>

            <!-- YouTube -->
            <a
                href="https://youtube.com/@restugurupromosindo2306?si=5JE41Faw_FbjfDGA"
                target="_blank"
                class="footer-social-youtube w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center transition"
            >
                <svg
                    class="w-4 h-4 text-gray-700 transition"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M22 12s0-4-1-5a4 4 0 0 0-3-2C15 4 12 4 12 4S9 4 6 5a4 4 0 0 0-3 2c-1 1-1 5-1 5s0 4 1 5c1 2 3 2 3 2 3 1 6 1 6 1s3 0 6-1a4 4 0 0 0 3-2c1-1 1-5 1-5z"
                    />
                    <polygon points="10,15 15,12 10,9" />
                </svg>
            </a>
        </div>

        <!-- COPYRIGHT -->
        <p class="text-center text-gray-500 text-xs tracking-wide">
            © {{ date("Y") }} Restu Guru Promosindo — All rights reserved.
        </p>
    </div>
</footer>
