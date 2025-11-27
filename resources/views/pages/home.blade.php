@extends('layouts.app')

@section('content')

{{-- =====================================================
     HERO — Clean Corporate (NO IMAGE) + Soft Accent
===================================================== --}}
<section class="fade-soft" style="padding: 140px 8% 120px;">
    <div class="max-w-3xl mx-auto text-center">

        <h1 class="hero-title text-[3rem] md:text-[3.4rem] font-extrabold leading-tight">
            <span class="hero-red">Precision</span>
            <span class="hero-yellow">Printing</span><br>
            <span class="hero-dark">for</span>
            <span class="hero-blue">Modern</span>
            <span class="hero-dark">Brands</span>
        </h1>

        <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
            Solusi percetakan profesional dengan detail presisi, warna konsisten,
            dan estetika modern untuk kebutuhan bisnis masa kini.
        </p>

        <div class="w-28 h-1 mx-auto mt-6 rounded-full"
             style="background: linear-gradient(90deg, var(--brand-blue), var(--brand-red));">
        </div>

        <a href="{{ route('services') }}" class="btn-primary mt-10 inline-block">
            View Services
        </a>
    </div>
</section>




{{-- =====================================================
     VALUE PROPOSITION — 3 Clean Corporate Blocks
===================================================== --}}
<section class="section-box fade-soft">
    <h2 class="section-title">Why Choose Us</h2>
    <p class="section-desc">Keunggulan utama yang membuat layanan kami dipercaya banyak brand besar.</p>

    <div class="value-grid">

        <div class="value-item">
            <img src="{{ asset('images/service-indoor.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">High Precision</h3>
            <p class="text-gray-600 text-sm mt-1">Kualitas cetak detail & warna akurat.</p>
        </div>

        <div class="value-item">
            <img src="{{ asset('images/service-outdoor.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">Consistent Color</h3>
            <p class="text-gray-600 text-sm mt-1">Stabil dari batch pertama sampai terakhir.</p>
        </div>

        <div class="value-item">
            <img src="{{ asset('images/service-multi.jpg') }}" class="value-img" style="height: 160px;">
            <h3 class="text-lg font-semibold mt-3">On-Time Delivery</h3>
            <p class="text-gray-600 text-sm mt-1">Tepat waktu & proses produksi efisien.</p>
        </div>

    </div>
</section>



{{-- =====================================================
     SERVICES PREVIEW — Smaller Images + Better Layout
===================================================== --}}
<section class="section-box fade-soft">
    <h2 class="section-title">Our Services</h2>
    <p class="section-desc">Layanan percetakan profesional untuk mendukung kebutuhan visual bisnis modern.</p>

    {{-- Service 1 --}}
    <div class="service-row">
        <div class="service-text">
            <h3>Indoor Printing</h3>
            <p>
                Poster, backdrop, banner, roll-up — diproduksi dengan kualitas tinggi & warna presisi.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-indoor.jpg') }}" alt="" style="height: 260px;">
        </div>
    </div>

    {{-- Service 2 --}}
    <div class="service-row reverse">
        <div class="service-text">
            <h3>Outdoor Printing</h3>
            <p>
                Billboard, signage, branding luar ruang dengan material tahan cuaca & finishing profesional.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-outdoor.jpg') }}" alt="" style="height: 260px;">
        </div>
    </div>

    {{-- Service 3 --}}
    <div class="service-row">
        <div class="service-text">
            <h3>Merch & Multi Product</h3>
            <p>
                Stiker, packaging, merchandise, dan berbagai produk custom lainnya
                dengan kualitas finishing profesional & detail yang rapi.
            </p>
            <a href="{{ route('services') }}" class="link-accent">Learn More →</a>
        </div>

        <div class="service-image">
            <img src="{{ asset('images/service-multi.jpg') }}" alt="" style="height: 260px;">
        </div>
    </div>

</section>



{{-- =====================================================
     CTA — Soft Corporate
===================================================== --}}
<section class="cta-section fade-soft">
    <h2>Ready to Print with Us?</h2>
    <p class="cta-desc">
        Dapatkan kualitas cetak premium yang meningkatkan citra brand Anda.
    </p>

    <a href="{{ route('contact') }}" class="btn-primary">
        Contact Us
    </a>
</section>

@endsection
