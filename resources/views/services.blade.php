@extends('layouts.app')

@section('content')

<section class="relative h-[60vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/services-bg.jpg') }}');">
  <div class="absolute inset-0 bg-[#e62129]/70"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-down">
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Layanan Kami</h1>
    <p class="text-lg max-w-2xl mx-auto">Solusi percetakan lengkap untuk kebutuhan promosi bisnis Anda.</p>
  </div>
</section>

<section class="py-20 bg-gray-50" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#00a2e9] mb-4">Kategori Utama</h2>
    <p class="text-gray-700 max-w-3xl mx-auto mb-10">Kami menyediakan tiga kategori utama layanan percetakan:</p>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition" data-aos="zoom-in-up" data-aos-delay="100">
        <img src="{{ asset('images/service-indoor.jpg') }}" class="rounded-md mb-4 h-48 w-full object-cover">
        <h3 class="text-xl font-bold text-[#e62129] mb-2">Indoor</h3>
        <p class="text-gray-600 text-sm">Produk cetak dalam ruangan seperti X-Banner, poster, brosur.</p>
      </div>
      <div class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition" data-aos="zoom-in-up" data-aos-delay="200">
        <img src="{{ asset('images/service-outdoor.jpg') }}" class="rounded-md mb-4 h-48 w-full object-cover">
        <h3 class="text-xl font-bold text-[#00a2e9] mb-2">Outdoor</h3>
        <p class="text-gray-600 text-sm">Spanduk, billboard, dan media luar ruang tahan cuaca.</p>
      </div>
      <div class="bg-white rounded-xl shadow-lg p-8 hover:-translate-y-2 transition" data-aos="zoom-in-up" data-aos-delay="300">
        <img src="{{ asset('images/service-multi.jpg') }}" class="rounded-md mb-4 h-48 w-full object-cover">
        <h3 class="text-xl font-bold text-[#fef100] mb-2">Multi</h3>
        <p class="text-gray-600 text-sm">Produk fleksibel seperti stiker, kartu nama, dan packaging.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-[#00a2e9] text-white text-center" data-aos="fade-up">
  <h2 class="text-3xl font-bold mb-4">Ingin Konsultasi Desain?</h2>
  <p class="mb-6 max-w-2xl mx-auto">Kami siap membantu Anda mewujudkan ide kreatif menjadi media cetak profesional.</p>
  <a href="{{ route('contact') }}" class="bg-[#fef100] text-black px-6 py-3 rounded-lg font-semibold hover:bg-white transition">
    Hubungi Kami
  </a>
</section>

@endsection
