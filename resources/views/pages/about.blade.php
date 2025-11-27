@extends('layouts.app')

@section('content')

{{-- =====================================================
     HERO ABOUT — Minimal Corporate
===================================================== --}}
<section class="pt-36 pb-20 bg-white text-center fade-soft">
    <div class="max-w-3xl mx-auto px-6">

        <h1 class="text-4xl md:text-6xl font-extrabold text-[#0f0f0f] leading-tight">
            Tentang Restu Guru Promosindo
        </h1>

        <p class="text-gray-600 mt-5 text-lg leading-relaxed">
            Solusi percetakan modern yang menggabungkan teknologi, estetika,
            dan konsistensi untuk menghadirkan hasil terbaik bagi bisnis Anda.
        </p>

    </div>
</section>



{{-- =====================================================
     COMPANY STORY — Clean & Corporate
===================================================== --}}
<section class="py-24 bg-[#fafafa]">
    <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div class="fade-soft">
            <h2 class="text-3xl font-bold text-[#0f0f0f]">Siapa Kami?</h2>
            <p class="text-gray-600 mt-4 leading-relaxed">
                CV. Restu Guru Promosindo adalah perusahaan percetakan yang berfokus pada
                kualitas, presisi, dan pelayanan profesional. Kami melayani kebutuhan printing
                untuk brand, perusahaan, event, UMKM, hingga personal.
            </p>
            <p class="text-gray-600 mt-3 leading-relaxed">
                Dengan pengalaman bertahun-tahun, kami memahami bahwa setiap detail visual
                adalah representasi penting dari identitas brand Anda.
            </p>
        </div>

        <img src="{{ asset('images/about-office.jpg') }}"
             class="rounded-2xl shadow-lg object-cover w-full h-80 hover-lift fade-soft"
             alt="Office">
    </div>
</section>



{{-- =====================================================
     VALUES — 3 Core Values
===================================================== --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold text-[#0f0f0f] fade-soft">Nilai Utama Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mt-3 fade-soft">
            Prinsip yang kami pegang dalam setiap proses produksi & pelayanan.
        </p>

        <div class="grid md:grid-cols-3 gap-12 mt-16">

            <div class="fade-soft">
                <h3 class="text-xl font-semibold">Quality First</h3>
                <p class="text-gray-600 mt-3">Kualitas menjadi prioritas di setiap tahap printing.</p>
            </div>

            <div class="fade-soft">
                <h3 class="text-xl font-semibold">Precision</h3>
                <p class="text-gray-600 mt-3">Presisi warna, detail, dan material sesuai standar profesional.</p>
            </div>

            <div class="fade-soft">
                <h3 class="text-xl font-semibold">Reliability</h3>
                <p class="text-gray-600 mt-3">Tepat waktu, terpercaya, dan selalu responsif.</p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     PHOTO BAND — minimal visual break
===================================================== --}}
<section class="w-full overflow-hidden relative my-10 fade-soft" data-micro-parallax>
    <img src="{{ asset('images/about-bg.jpg') }}"
         class="w-full h-[380px] md:h-[460px] object-cover brightness-[0.85] rounded-2xl">
</section>



{{-- =====================================================
     MISSION & VISION — Clean layout
===================================================== --}}
<section class="py-24 bg-[#fafafa]">
    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold text-[#0f0f0f] fade-soft">Misi & Visi Kami</h2>

        <div class="mt-12 grid md:grid-cols-2 gap-10 text-left">

            <div class="fade-soft">
                <h3 class="font-semibold text-xl">Visi</h3>
                <p class="text-gray-600 mt-3 leading-relaxed">
                    Menjadi perusahaan percetakan modern yang menghadirkan kualitas global
                    dengan harga kompetitif bagi pelaku bisnis di Indonesia.
                </p>
            </div>

            <div class="fade-soft">
                <h3 class="font-semibold text-xl">Misi</h3>
                <p class="text-gray-600 mt-3 leading-relaxed">
                    Menghasilkan karya cetak yang konsisten, presisi, dan kreatif
                    untuk mendukung pertumbuhan brand & bisnis klien.
                </p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     CTA — Minimal Corporate
===================================================== --}}
<section class="py-20 bg-white text-center fade-soft">
    <h2 class="text-3xl font-bold text-[#0f0f0f]">Siap Bekerja Dengan Kami?</h2>
    <p class="text-gray-600 max-w-lg mx-auto mt-3">
        Kami siap membantu kebutuhan percetakan Anda dengan hasil terbaik.
    </p>

    <a href="{{ route('contact') }}"
       class="mt-8 inline-block bg-[#00a2e9] text-white px-10 py-3 rounded-xl hover-scale font-semibold transition">
        Hubungi Kami
    </a>
</section>

@endsection
