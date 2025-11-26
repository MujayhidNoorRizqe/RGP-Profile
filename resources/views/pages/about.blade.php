@extends('layouts.app')

@section('content')

{{-- HERO ABOUT --}}
<section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/about-bg.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-b from-[#00a2e9]/70 via-[#e62129]/40 to-black/70"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-down">
    <h1 class="text-5xl md:text-6xl font-bold mb-4">Tentang Kami</h1>
    <p class="text-lg max-w-2xl mx-auto text-gray-100">
      Menjadi mitra terpercaya dalam dunia percetakan & advertising, menghadirkan hasil yang presisi dan berdampak.
    </p>
  </div>
</section>

{{-- COMPANY PROFILE --}}
<section class="py-24 bg-gradient-to-b from-white via-[#f9fafb] to-[#eef8ff]">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('images/about-office.jpg') }}" alt="Kantor Restu Guru Promosindo"
           class="rounded-2xl shadow-lg object-cover w-full h-[400px]">
    </div>
    <div data-aos="fade-left" data-aos-delay="150">
      <h2 class="text-3xl font-bold text-[#e62129] mb-4">Profil Perusahaan</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        <strong>CV. Restu Guru Promosindo</strong> adalah perusahaan percetakan dan advertising profesional yang berdedikasi
        memberikan solusi visual kreatif bagi bisnis di seluruh Indonesia. Kami menyediakan layanan dari desain, produksi,
        hingga pemasangan dengan standar kualitas tinggi.
      </p>
      <p class="text-gray-700 leading-relaxed mb-4">
        Berbekal pengalaman lebih dari satu dekade, kami telah dipercaya oleh berbagai instansi, perusahaan, dan brand ternama.
      </p>
      <div class="flex items-center gap-3 text-[#00a2e9] mt-6">
        <i class="fa-solid fa-check-circle text-xl"></i>
        <span class="font-medium">Terpercaya & Inovatif Sejak 2010</span>
      </div>
    </div>
  </div>
</section>

{{-- DIRECTOR PROFILE --}}
<section class="py-24 bg-white border-t border-gray-100">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('images/director.jpg') }}" alt="Direktur"
           class="rounded-full w-72 h-72 object-cover mx-auto shadow-xl border-4 border-[#00a2e9]">
    </div>
    <div data-aos="fade-left" data-aos-delay="150">
      <h3 class="text-3xl font-bold text-[#e62129] mb-2">Putra Qomaluddin Attar Nurriqli, M.I.Kom</h3>
      <p class="text-[#00a2e9] font-semibold mb-4">Direktur Utama CV. Restu Guru Promosindo</p>
      <ul class="text-gray-700 space-y-1 mb-5 text-sm">
        <li><strong>Tempat/Tanggal Lahir:</strong> Banjarmasin, 12 Oktober 1985</li>
        <li><strong>Alamat:</strong> Jl. Baung Komp. Wirapratama III Blok B No.22 RT.25 RW.04, Sungai Besar</li>
        <li><strong>Agama:</strong> Islam</li>
        <li><strong>Pendidikan:</strong> S1 Ilmu Komunikasi</li>
        <li><strong>Jabatan:</strong> Direktur CV. Restu Guru Promosindo</li>
      </ul>
      <blockquote class="italic text-gray-600 border-l-4 border-[#00a2e9] pl-4">
        “Kami berkomitmen menjadi mitra percetakan yang tidak hanya menghasilkan karya visual, tapi juga memperkuat nilai dan citra setiap klien.”
      </blockquote>
    </div>
  </div>
</section>

{{-- TIMELINE / MILESTONE --}}
<section class="py-24 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#00a2e9] mb-12" data-aos="fade-up">Perjalanan Kami</h2>
    <div class="relative border-l-2 border-[#00a2e9] ml-6">
      <div class="mb-10 pl-8" data-aos="fade-right">
        <span class="text-sm text-gray-400">2010</span>
        <h3 class="text-xl font-semibold text-[#e62129]">Awal Berdiri</h3>
        <p class="text-gray-600 max-w-2xl">CV. Restu Guru Promosindo resmi didirikan di Bekasi sebagai percetakan lokal dengan fokus pada media promosi indoor.</p>
      </div>
      <div class="mb-10 pl-8" data-aos="fade-right" data-aos-delay="150">
        <span class="text-sm text-gray-400">2015</span>
        <h3 class="text-xl font-semibold text-[#00a2e9]">Ekspansi Layanan Outdoor</h3>
        <p class="text-gray-600 max-w-2xl">Mulai menyediakan layanan spanduk, billboard, neon box, dan media luar ruang profesional.</p>
      </div>
      <div class="mb-10 pl-8" data-aos="fade-right" data-aos-delay="300">
        <span class="text-sm text-gray-400">2018</span>
        <h3 class="text-xl font-semibold text-[#fef100]">Digitalisasi & Desain Modern</h3>
        <p class="text-gray-600 max-w-2xl">Mengintegrasikan teknologi digital printing dan desain kreatif untuk meningkatkan efisiensi dan kualitas hasil cetak.</p>
      </div>
      <div class="pl-8" data-aos="fade-right" data-aos-delay="450">
        <span class="text-sm text-gray-400">2024</span>
        <h3 class="text-xl font-semibold text-[#e62129]">Transformasi Digital</h3>
        <p class="text-gray-600 max-w-2xl">Meluncurkan website resmi dan sistem pemesanan online sebagai langkah menuju digital experience bagi pelanggan.</p>
      </div>
    </div>
  </div>
</section>

{{-- VISION & MISSION --}}
<section class="py-24 bg-white border-t border-gray-100">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#e62129] mb-12" data-aos="fade-up">Visi & Misi</h2>
    <div class="grid md:grid-cols-2 gap-10">
      <div class="bg-gradient-to-b from-[#fff] to-[#f8fafc] p-8 rounded-2xl shadow-md border-t-4 border-[#e62129]" data-aos="flip-left">
        <h3 class="text-xl font-semibold text-[#e62129] mb-3">Visi</h3>
        <p class="text-gray-700 leading-relaxed">Menjadi perusahaan percetakan dan advertising terdepan di Indonesia dengan kualitas unggul dan layanan cepat yang berorientasi pada kepuasan pelanggan.</p>
      </div>
      <div class="bg-gradient-to-b from-[#fff] to-[#f8fafc] p-8 rounded-2xl shadow-md border-t-4 border-[#00a2e9]" data-aos="flip-right">
        <h3 class="text-xl font-semibold text-[#00a2e9] mb-3">Misi</h3>
        <ul class="list-disc list-inside text-gray-700 text-left space-y-2">
          <li>Memberikan layanan percetakan dengan standar profesional.</li>
          <li>Mengutamakan kepuasan pelanggan dengan komunikasi efektif.</li>
          <li>Mengadopsi teknologi percetakan terkini secara berkelanjutan.</li>
          <li>Mendukung pertumbuhan brand klien melalui media visual kreatif.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-r from-[#00a2e9] to-[#e62129] text-white text-center" data-aos="zoom-in">
  <h2 class="text-3xl font-bold mb-4">Percayakan Kebutuhan Cetak Anda pada Kami</h2>
  <p class="mb-6 max-w-2xl mx-auto text-gray-100">Kami siap membantu Anda menciptakan media promosi yang menarik, profesional, dan berdampak besar.</p>
  <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-[#fef100] transition">
    Hubungi Kami Sekarang
  </a>
</section>

@endsection
