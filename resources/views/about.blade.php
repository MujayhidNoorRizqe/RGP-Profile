@extends('layouts.app')

@section('content')

{{-- HERO ABOUT --}}
<section class="relative h-[60vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/about-bg.jpg') }}');">
  <div class="absolute inset-0 bg-[#00a2e9]/70"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-up">
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Tentang Kami</h1>
    <p class="text-lg max-w-2xl mx-auto">
      Mengenal lebih dekat CV. Restu Guru Promosindo, mitra andalan Anda dalam dunia percetakan dan advertising.
    </p>
  </div>
</section>

{{-- COMPANY PROFILE --}}
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('images/about-office.jpg') }}" alt="Kantor" class="rounded-xl shadow-lg object-cover w-full h-[350px]">
    </div>
    <div data-aos="fade-left" data-aos-delay="150">
      <h2 class="text-3xl font-bold text-[#e62129] mb-4">Profil Perusahaan</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        <strong>CV. Restu Guru Promosindo</strong> bergerak di bidang <strong>percetakan dan advertising</strong>,
        memberikan layanan desain, produksi, hingga pemasangan media promosi dengan kualitas tinggi dan kecepatan pengerjaan.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Dengan tenaga profesional dan mesin cetak modern, kami siap memberikan hasil terbaik untuk setiap proyek—baik berskala kecil maupun besar.
      </p>
    </div>
  </div>
</section>

{{-- DIREKTUR PROFILE --}}
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('images/director.jpg') }}" alt="Direktur" class="rounded-full w-64 h-64 object-cover mx-auto shadow-lg border-4 border-[#00a2e9]">
    </div>
    <div data-aos="fade-left" data-aos-delay="150">
      <h3 class="text-3xl font-bold text-[#e62129] mb-2">Putra Qomaluddin Attar Nurriqli, M.I.Kom</h3>
      <p class="text-[#00a2e9] font-semibold mb-4">Direktur CV. Restu Guru Promosindo</p>
      <ul class="text-gray-700 space-y-1 mb-4 text-sm">
        <li><strong>Tempat/Tanggal Lahir:</strong> Banjarmasin, 12 Oktober 1985</li>
        <li><strong>Alamat:</strong> Jl. Baung Komp. Wirapratama III Blok B No.22 RT.25 RW 04 Sungai Besar</li>
        <li><strong>Agama:</strong> Islam</li>
        <li><strong>Pendidikan:</strong> S1 Ilmu Komunikasi</li>
      </ul>
      <p class="italic text-gray-600">
        “Kami berkomitmen menjadi mitra percetakan yang inovatif dan dapat dipercaya, menghadirkan solusi kreatif untuk setiap kebutuhan pelanggan.”
      </p>
    </div>
  </div>
</section>

{{-- VISI MISI --}}
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#00a2e9] mb-8" data-aos="fade-up">Visi & Misi</h2>
    <div class="grid md:grid-cols-2 gap-8 text-left">
      <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-[#e62129]" data-aos="flip-left">
        <h3 class="text-xl font-semibold text-[#e62129] mb-3">Visi</h3>
        <p class="text-gray-700">Menjadi perusahaan percetakan dan advertising terpercaya di Indonesia dengan kualitas unggul dan pelayanan cepat.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-[#00a2e9]" data-aos="flip-right">
        <h3 class="text-xl font-semibold text-[#00a2e9] mb-3">Misi</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>Memberikan layanan percetakan cepat dan berkualitas tinggi.</li>
          <li>Mengutamakan kepuasan pelanggan dan komunikasi profesional.</li>
          <li>Berinovasi dengan teknologi percetakan terbaru.</li>
          <li>Mendukung promosi bisnis klien secara berkelanjutan.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-[#e62129] text-white text-center" data-aos="fade-up">
  <h2 class="text-3xl font-bold mb-4">Percayakan Kebutuhan Cetak Anda pada Kami</h2>
  <a href="{{ route('contact') }}" class="bg-[#fef100] text-black px-6 py-3 rounded-lg font-semibold hover:bg-white transition">
    Hubungi Kami Sekarang
  </a>
</section>

@endsection
