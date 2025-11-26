@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/services-bg.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-b from-[#e62129]/70 via-[#00a2e9]/40 to-black/60"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-down">
    <h1 class="text-5xl md:text-6xl font-bold mb-4">Layanan Kami</h1>
    <p class="text-lg max-w-2xl mx-auto text-gray-100">
      Solusi percetakan lengkap — dari desain, produksi, hingga pemasangan media promosi Anda.
    </p>
  </div>
</section>

{{-- INTRO --}}
<section class="py-24 bg-gradient-to-b from-white via-[#f8fafc] to-[#eef7ff]" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#00a2e9] mb-6">Kategori Utama</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-12">
      Kami menyediakan tiga kategori utama untuk mendukung setiap kebutuhan promosi Anda —
      dari cetak indoor, outdoor, hingga produk multi yang fleksibel.
    </p>

    {{-- GRID KATEGORI --}}
    <div class="grid md:grid-cols-3 gap-10">
      {{-- Indoor --}}
      <div class="group relative overflow-hidden rounded-2xl shadow-xl bg-white hover:-translate-y-2 transition-all duration-500" data-aos="zoom-in">
        <img src="{{ asset('images/service-indoor.jpg') }}" alt="Layanan Indoor"
             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
        <div class="absolute inset-0 bg-[#e62129]/60 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center transition-all duration-500 text-white">
          <h3 class="text-2xl font-semibold">Indoor</h3>
          <p class="text-sm mt-2 max-w-xs text-center text-gray-100">Produk cetak ruangan: X-Banner, poster, brosur, dan lainnya.</p>
        </div>
      </div>

      {{-- Outdoor --}}
      <div class="group relative overflow-hidden rounded-2xl shadow-xl bg-white hover:-translate-y-2 transition-all duration-500" data-aos="zoom-in" data-aos-delay="150">
        <img src="{{ asset('images/service-outdoor.jpg') }}" alt="Layanan Outdoor"
             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
        <div class="absolute inset-0 bg-[#00a2e9]/60 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center transition-all duration-500 text-white">
          <h3 class="text-2xl font-semibold">Outdoor</h3>
          <p class="text-sm mt-2 max-w-xs text-center text-gray-100">Spanduk, billboard, baliho, dan media tahan cuaca.</p>
        </div>
      </div>

      {{-- Multi --}}
      <div class="group relative overflow-hidden rounded-2xl shadow-xl bg-white hover:-translate-y-2 transition-all duration-500" data-aos="zoom-in" data-aos-delay="300">
        <img src="{{ asset('images/service-multi.jpg') }}" alt="Layanan Multi"
             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
        <div class="absolute inset-0 bg-[#fef100]/60 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center transition-all duration-500 text-black">
          <h3 class="text-2xl font-semibold">Multi</h3>
          <p class="text-sm mt-2 max-w-xs text-center">Stiker, label, packaging, kartu nama, dan merchandise branding.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- DETAIL LAYANAN --}}
<section class="py-24 bg-white border-t border-gray-100" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#e62129] mb-4">Detail Layanan</h2>
    <p class="text-gray-600 mb-12 max-w-3xl mx-auto">
      Kami menghadirkan beragam layanan profesional dengan hasil presisi dan kualitas tinggi.
    </p>

    <div class="grid md:grid-cols-3 gap-10 text-left">
      <div class="p-6 bg-gradient-to-b from-[#fff] to-[#f8fafc] rounded-xl shadow-md border-l-4 border-[#e62129]" data-aos="fade-right">
        <h3 class="text-xl font-semibold mb-2 text-[#e62129]">Layanan Indoor</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
          <li>X-Banner & Roll Up Banner</li>
          <li>Poster & Brosur</li>
          <li>Katalog & Booklet</li>
          <li>Backdrop Event</li>
        </ul>
      </div>

      <div class="p-6 bg-gradient-to-b from-[#fff] to-[#f8fafc] rounded-xl shadow-md border-l-4 border-[#00a2e9]" data-aos="fade-up">
        <h3 class="text-xl font-semibold mb-2 text-[#00a2e9]">Layanan Outdoor</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
          <li>Billboard & Baliho</li>
          <li>Neon Box & Sign Board</li>
          <li>Branding Kendaraan</li>
          <li>Banner Tahan Cuaca</li>
        </ul>
      </div>

      <div class="p-6 bg-gradient-to-b from-[#fff] to-[#f8fafc] rounded-xl shadow-md border-l-4 border-[#fef100]" data-aos="fade-left">
        <h3 class="text-xl font-semibold mb-2 text-[#fef100]">Layanan Multi</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
          <li>Stiker & Label Produk</li>
          <li>Kartu Nama & ID Card</li>
          <li>Pouch & Kemasan Produk</li>
          <li>Merchandise Promosi</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- GALLERY --}}
<section class="py-24 bg-gray-50 border-t" data-aos="fade-up">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#00a2e9] mb-6">Hasil Karya Kami</h2>
    <p class="text-gray-600 mb-12 max-w-3xl mx-auto">Beberapa dokumentasi hasil cetak dan pemasangan yang telah kami kerjakan untuk berbagai klien.</p>

    <div class="grid md:grid-cols-3 gap-6">
      @foreach (['gallery1.jpg', 'gallery2.jpg', 'gallery3.jpg', 'gallery4.jpg', 'gallery5.jpg', 'gallery6.jpg'] as $img)
        <div class="relative group overflow-hidden rounded-xl shadow-md" data-aos="zoom-in">
          <img src="{{ asset('images/' . $img) }}" alt="Gallery" class="w-full h-56 object-cover group-hover:scale-110 transition duration-700">
          <div class="absolute inset-0 bg-[#000]/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all duration-500">
            <i class="fa-solid fa-magnifying-glass text-white text-3xl"></i>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-r from-[#e62129] to-[#00a2e9] text-white text-center" data-aos="zoom-in">
  <h2 class="text-3xl font-bold mb-4">Ingin Cetak Sekarang?</h2>
  <p class="mb-6 max-w-2xl mx-auto text-gray-100">Hubungi kami untuk konsultasi gratis dan dapatkan hasil cetak terbaik dengan harga kompetitif.</p>
  <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-[#fef100] transition">
    Hubungi Kami
  </a>
</section>

@endsection
