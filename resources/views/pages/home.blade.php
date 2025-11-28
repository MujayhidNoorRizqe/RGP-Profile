@extends('layouts.app')

@section('content')

{{-- =====================================================
                            HERO
===================================================== --}}
<section class="fade-soft" style="padding: 140px 8% 120px;">
    <div class="max-w-3xl mx-auto text-center">

        <h1 class="hero-title text-[3rem] md:text-[3.4rem] font-extrabold leading-tight">
            <span class="hero-red">Restu</span>
            <span class="hero-yellow">Guru</span>
            <span class="hero-blue">Promosindo</span><br>
            <span class="hero-dark">Digital</span>
            <span class="hero-dark">Printing</span>
            <span class="hero-dark">untuk</span>
            <span class="hero-dark">Brand</span>
            <span class="hero-dark">Modern</span>
        </h1>

        <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
            Solusi percetakan profesional dengan presisi tinggi, warna konsisten,
            dan estetika modern untuk kebutuhan brand masa kini.
        </p>

        <!-- Gradient tetap untuk hero -->
        <div class="w-40 h-1 mx-auto mt-6 rounded-full"
            style="background: var(--rg-gradient);"></div>

        <a href="{{ route('services') }}" class="btn-primary mt-10 inline-block">
            View Services
        </a>
    </div>
</section>





{{-- =====================================================
     VALUE PROPOSITION — Why Choose Us
===================================================== --}}
<section class="section-box fade-soft">
    <h2 class="section-title">Why Choose Us</h2>

    <!-- ACCENT LINE (BLUE) -->
    <div class="w-24 h-[3px] mx-auto mt-3 mb-8 rounded-full"
         style="background: var(--brand-blue);"></div>

    <p class="section-desc">Keunggulan utama yang membuat layanan kami dipercaya banyak brand besar.</p>

    <div class="value-grid">

        <div class="value-item hover:shadow-lg transition">
            <img src="{{ asset('images/service-indoor.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">High Precision</h3>
            <p class="text-gray-600 text-sm mt-1">Kualitas cetak detail & warna akurat.</p>
        </div>

        <div class="value-item hover:shadow-lg transition">
            <img src="{{ asset('images/service-outdoor.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">Consistent Color</h3>
            <p class="text-gray-600 text-sm mt-1">Stabil dari batch pertama sampai terakhir.</p>
        </div>

        <div class="value-item hover:shadow-lg transition">
            <img src="{{ asset('images/service-multi.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">On-Time Delivery</h3>
            <p class="text-gray-600 text-sm mt-1">Tepat waktu & proses produksi efisien.</p>
        </div>

    </div>
</section>




{{-- =====================================================
     SERVICES PREVIEW — Our Services
===================================================== --}}
<section class="section-box fade-soft">
    <h2 class="section-title">Our Services</h2>

    <!-- ACCENT LINE (RED) -->
    <div class="w-24 h-[3px] mx-auto mt-3 mb-8 rounded-full"
         style="background: var(--brand-red);"></div>

    <p class="section-desc">Layanan percetakan profesional untuk mendukung kebutuhan visual bisnis modern.</p>


    {{-- Service 1 --}}
    <div class="service-row">
        <div class="service-text">
            <h3 style="color: var(--brand-blue);">Indoor Printing</h3>
            <p>
                Poster, backdrop, banner, roll-up — diproduksi dengan kualitas tinggi & warna presisi.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-indoor.jpg') }}"
                 alt=""
                 class="rounded-2xl"
                 style="height: 260px; box-shadow: none;">
        </div>
    </div>


    {{-- Service 2 --}}
    <div class="service-row reverse">
        <div class="service-text">
            <h3 style="color: var(--brand-red);">Outdoor Printing</h3>
            <p>
                Billboard, signage, branding luar ruang dengan material tahan cuaca & finishing profesional.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-outdoor.jpg') }}"
                 alt=""
                 class="rounded-2xl"
                 style="height: 260px; box-shadow: none;">
        </div>
    </div>


    {{-- Service 3 --}}
    <div class="service-row">
        <div class="service-text">
            <h3 style="color: var(--brand-yellow);">Merch & Multi Product</h3>
            <p>
                Stiker, packaging, merchandise, dan berbagai produk custom lainnya
                dengan kualitas finishing profesional & detail yang rapi.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-multi.jpg') }}"
                 alt=""
                 class="rounded-2xl"
                 style="height: 260px; box-shadow: none;">
        </div>
    </div>

</section>




{{-- =====================================================
     CTA — Ready to Print with Us
===================================================== --}}
<section class="cta-section fade-soft">
    <h2>Ready to Print with Us?</h2>

    <!-- ACCENT LINE (YELLOW) -->
    <div class="w-24 h-[3px] mx-auto mt-3 mb-6 rounded-full"
         style="background: var(--brand-yellow);"></div>

    <p class="cta-desc">
        Dapatkan kualitas cetak premium yang meningkatkan citra brand Anda.
    </p>

    <a href="{{ route('contact') }}" class="btn-primary">
        Contact Us
    </a>
</section>

@endsection
