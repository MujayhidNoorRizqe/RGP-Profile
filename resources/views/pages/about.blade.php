@extends('layouts.app')

@section('content')

{{-- =====================================================
     HERO ABOUT — Premium Corporate Split Color
===================================================== --}}
<section class="pt-36 pb-20 bg-white text-center fade-soft">
    <div class="max-w-3xl mx-auto px-6">

        <h1 class="hero-title leading-tight font-extrabold text-[2.8rem] md:text-[3.6rem]">
            <span class="hero-dark">Tentang</span>
            <span class="hero-red">Restu</span>
            <span class="hero-blue">Guru</span>
            <span class="hero-yellow">Promosindo</span>
        </h1>

        <p class="mt-5 text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto">
            Solusi percetakan modern yang menggabungkan teknologi, estetika, dan konsistensi
            untuk menghadirkan hasil terbaik bagi bisnis Anda.
        </p>

        <!-- Accent line (brand colors) -->
        <div class="w-28 h-1 mx-auto mt-6 rounded-full"
             style="background: linear-gradient(90deg, var(--brand-blue), var(--brand-red), var(--brand-yellow));">
        </div>
    </div>
</section>



{{-- =====================================================
     COMPANY STORY — Clean & Corporate
===================================================== --}}
<section class="py-24 bg-[#fafafa]">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

        <div class="fade-soft">
            <h2 class="text-3xl font-bold text-[#0f0f0f] mb-3 border-l-4 pl-3"
                style="border-color: var(--brand-red);">Siapa Kami?</h2>

            <p class="text-gray-600 leading-relaxed mb-3">
                CV. Restu Guru Promosindo adalah perusahaan percetakan yang berfokus pada
                kualitas, presisi, dan pelayanan profesional. Kami melayani berbagai kebutuhan
                printing untuk brand, perusahaan, event, UMKM hingga personal.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Dengan pengalaman bertahun-tahun di industri percetakan modern, kami memahami
                bahwa setiap detail visual adalah representasi penting dari identitas brand Anda.
            </p>
        </div>

        <div class="fade-soft soft-float">
            <img src="{{ asset('images/about-office.jpg') }}"
                 class="rounded-2xl shadow-xl object-cover w-full h-80 hover:scale-[1.015] transition duration-300"
                 alt="Office">
        </div>
    </div>
</section>



{{-- =====================================================
     OWNER PROFILE — Foto Kiri & Teks Kanan
===================================================== --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- FOTO OWNER -->
        <div class="fade-soft">
            <img src="{{ asset('images/owner.jpg') }}"
                 class="rounded-2xl shadow-xl w-full h-[450px] object-cover soft-float"
                 alt="Owner">
        </div>

        <!-- TEKS PROFIL -->
        <div class="fade-soft">
            <h2 class="text-3xl font-bold text-[#0f0f0f] mb-4">
                <span style="border-bottom: 4px solid var(--brand-blue); padding-bottom: 4px;">
                    Owner
                </span>
            </h2>

            <h3 class="text-2xl font-semibold text-[#0f0f0f] leading-snug">
                Putra Qomaluddin Attar Nurriqli, M.I.Kom
            </h3>

            <p class="text-gray-600 leading-relaxed mt-4">
                Putra Qomaluddin Attar Nurriqli, M.I.Kom adalah pendiri sekaligus Direktur CV. Restu Guru Promosindo.
                Lahir di Banjarmasin pada 12 Oktober 1985, beliau memiliki latar belakang pendidikan S1 Ilmu Komunikasi.
            </p>

            <p class="text-gray-600 leading-relaxed mt-3">
                Dengan pengalaman komunikasi yang matang, beliau membangun Restu Guru Promosindo sebagai
                percetakan modern dengan fokus pada kualitas, presisi, dan pelayanan profesional.
            </p>

            <p class="text-gray-600 leading-relaxed mt-3">
                Di bawah kepemimpinannya, perusahaan berkembang pesat berkat komitmen terhadap hasil cetak
                yang konsisten, rapi, dan efisien.
            </p>
        </div>

    </div>
</section>



{{-- =====================================================
     CORE VALUES — 3 Corporate Blocks
===================================================== --}}
<section class="py-24 bg-[#fafafa]">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="section-title fade-soft">Nilai Utama Kami</h2>
        <p class="section-desc fade-soft">Prinsip yang kami pegang dalam setiap proses produksi dan pelayanan.</p>

        <div class="grid md:grid-cols-3 gap-12 mt-14">

            <div class="fade-soft hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-[#0f0f0f]">Quality First</h3>
                <div class="w-10 h-1 mx-auto mt-2 rounded-full"
                     style="background: var(--brand-red);"></div>
                <p class="text-gray-600 mt-3">Kualitas menjadi prioritas pada setiap proses printing.</p>
            </div>

            <div class="fade-soft hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-[#0f0f0f]">Precision</h3>
                <div class="w-10 h-1 mx-auto mt-2 rounded-full"
                     style="background: var(--brand-blue);"></div>
                <p class="text-gray-600 mt-3">Presisi warna dan detail sesuai standar profesional.</p>
            </div>

            <div class="fade-soft hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-[#0f0f0f]">Reliability</h3>
                <div class="w-10 h-1 mx-auto mt-2 rounded-full"
                     style="background: var(--brand-yellow);"></div>
                <p class="text-gray-600 mt-3">Tepat waktu, konsisten, dan responsif.</p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     HISTORY TIMELINE — with brand accents
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-5xl mx-auto px-6">

        <h2 class="section-title fade-soft">Sejarah Perusahaan</h2>
        <p class="section-desc fade-soft">Perjalanan Restu Guru Promosindo dari awal hingga kini.</p>

        <div class="relative border-l-4 mt-14 space-y-12"
             style="border-color: var(--brand-blue);">

            <div class="ml-6">
                <h3 class="text-xl font-bold text-gray-900">2015 — Berdiri</h3>
                <p class="text-gray-600 mt-2">Restu Guru Promosindo resmi didirikan sebagai percetakan lokal.</p>
            </div>

            <div class="ml-6">
                <h3 class="text-xl font-bold text-gray-900">2018 — Ekspansi</h3>
                <p class="text-gray-600 mt-2">Penambahan layanan indoor & outdoor printing.</p>
            </div>

            <div class="ml-6">
                <h3 class="text-xl font-bold text-gray-900">2021 — Modernisasi</h3>
                <p class="text-gray-600 mt-2">Implementasi digital workflow untuk hasil presisi konsisten.</p>
            </div>

            <div class="ml-6">
                <h3 class="text-xl font-bold text-gray-900">2024 — Ekspansi Regional</h3>
                <p class="text-gray-600 mt-2">
                    Hadir di Banjarbaru, Banjar, Banjarmasin, Martapura, Liang Anggang, dan Pelaihari.
                </p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     MINI SHOWCASE — 3 Highlight Foto & Keterangan
===================================================== --}}
<section class="py-20 bg-white fade-soft">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10">

        <!-- ITEM 1 -->
        <div class="text-center fade-soft hover:-translate-y-1 transition">
            <div class="rounded-2xl overflow-hidden shadow-md soft-float">
                <img src="{{ asset('images/service-outdoor.jpg') }}"
                     class="w-full h-52 object-cover">
            </div>

            <h3 class="mt-4 font-semibold text-lg text-gray-900">Digital Printing</h3>
            <p class="text-gray-500 text-sm mt-1">
                Mesin printing modern berteknologi tinggi untuk hasil warna presisi.
            </p>
        </div>

        <!-- ITEM 2 -->
        <div class="text-center fade-soft hover:-translate-y-1 transition">
            <div class="rounded-2xl overflow-hidden shadow-md soft-float">
                <img src="{{ asset('images/service-indoor.jpg') }}"
                     class="w-full h-52 object-cover">
            </div>

            <h3 class="mt-4 font-semibold text-lg text-gray-900">Finishing & Cutting</h3>
            <p class="text-gray-500 text-sm mt-1">
                Proses laminasi, cutting, dan trimming dengan detail tinggi.
            </p>
        </div>

        <!-- ITEM 3 -->
        <div class="text-center fade-soft hover:-translate-y-1 transition">
            <div class="rounded-2xl overflow-hidden shadow-md soft-float">
                <img src="{{ asset('images/service-multi.jpg') }}"
                     class="w-full h-52 object-cover">
            </div>

            <h3 class="mt-4 font-semibold text-lg text-gray-900">Material & Quality Check</h3>
            <p class="text-gray-500 text-sm mt-1">
                Pemeriksaan kualitas material untuk memastikan hasil cetak terbaik.
            </p>
        </div>

    </div>
</section>


{{-- =====================================================
     VISION & MISSION — subtle accents
===================================================== --}}
<section class="py-24 bg-[#fafafa]">
    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="section-title fade-soft">Misi & Visi Kami</h2>

        <div class="grid md:grid-cols-2 gap-12 mt-14 text-left">

            <div class="fade-soft p-3 border-l-4" style="border-color: var(--brand-red);">
                <h3 class="text-xl font-semibold text-[#0f0f0f]">Visi</h3>
                <p class="text-gray-600 mt-3 leading-relaxed">
                    Menjadi perusahaan percetakan modern dengan standar kualitas global.
                </p>
            </div>

            <div class="fade-soft p-3 border-l-4" style="border-color: var(--brand-blue);">
                <h3 class="text-xl font-semibold text-[#0f0f0f]">Misi</h3>
                <p class="text-gray-600 mt-3 leading-relaxed">
                    Menghasilkan karya cetak presisi, konsisten, dan efisien untuk mendukung pertumbuhan brand klien.
                </p>
            </div>

        </div>
    </div>
</section>



{{-- =====================================================
     AWARDS & CERTIFICATIONS
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="section-title fade-soft">Sertifikasi & Penghargaan</h2>
        <p class="section-desc fade-soft">Pengakuan atas komitmen kami pada kualitas & profesionalisme.</p>

        <div class="grid md:grid-cols-3 gap-10 mt-14">

            <div class="p-6 bg-[#fafafa] rounded-2xl shadow hover:shadow-lg transition border-t-4"
                 style="border-color: var(--brand-blue);">
                <h3 class="font-semibold text-lg text-gray-900">ISO Standard Workflow</h3>
                <p class="text-gray-500 text-sm mt-2">Standarisasi proses untuk hasil cetak konsisten.</p>
            </div>

            <div class="p-6 bg-[#fafafa] rounded-2xl shadow hover:shadow-lg transition border-t-4"
                 style="border-color: var(--brand-red);">
                <h3 class="font-semibold text-lg text-gray-900">Best Local Printing</h3>
                <p class="text-gray-500 text-sm mt-2">Penghargaan atas layanan cepat & berkualitas.</p>
            </div>

            <div class="p-6 bg-[#fafafa] rounded-2xl shadow hover:shadow-lg transition border-t-4"
                 style="border-color: var(--brand-yellow);">
                <h3 class="font-semibold text-lg text-gray-900">Trusted Partner</h3>
                <p class="text-gray-500 text-sm mt-2">Dipercaya berbagai perusahaan & instansi.</p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     MEET OUR TEAM
===================================================== --}}
<section class="py-24 bg-[#fafafa] fade-soft">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="section-title fade-soft">Meet Our Team</h2>
        <p class="section-desc fade-soft">Tim profesional dengan dedikasi tinggi.</p>

        <div class="grid md:grid-cols-3 gap-12 mt-14">

            <div class="fade-soft hover:-translate-y-1 transition">
                <img src="{{ asset('images/owner.jpg') }}"
                     class="w-36 h-36 mx-auto rounded-full object-cover shadow-md mb-4">
                <h3 class="font-semibold text-lg text-gray-900">Putra Qomaluddin Attar N.</h3>
                <p class="text-gray-500 text-sm">Direktur Utama</p>
            </div>

            <div class="fade-soft hover:-translate-y-1 transition">
                <img src="{{ asset('images/team2.jpg') }}"
                     class="w-36 h-36 mx-auto rounded-full object-cover shadow-md mb-4">
                <h3 class="font-semibold text-lg text-gray-900">Nama Staf 1</h3>
                <p class="text-gray-500 text-sm">Head of Production</p>
            </div>

            <div class="fade-soft hover:-translate-y-1 transition">
                <img src="{{ asset('images/team3.jpg') }}"
                     class="w-36 h-36 mx-auto rounded-full object-cover shadow-md mb-4">
                <h3 class="font-semibold text-lg text-gray-900">Nama Staf 2</h3>
                <p class="text-gray-500 text-sm">Client Relation</p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     CTA — Clean Corporate
===================================================== --}}
<section class="py-20 bg-white text-center fade-soft">
    <h2 class="text-3xl font-bold text-[#0f0f0f]">Siap Bekerja Dengan Kami?</h2>

    <p class="text-gray-600 max-w-lg mx-auto mt-3">
        Kami siap membantu kebutuhan percetakan Anda dengan hasil terbaik & presisi tinggi.
    </p>

    <a href="{{ route('contact') }}" class="btn-primary mt-8 inline-block">
        Hubungi Kami
    </a>
</section>

@endsection
