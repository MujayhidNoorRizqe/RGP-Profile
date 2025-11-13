@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-[90vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/printing-bg.jpg') }}');">
    <div class="absolute inset-0 bg-[#e62129]/60"></div>
    <div class="relative z-10 text-center text-white px-6" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Solusi Percetakan Modern untuk Bisnis Anda</h1>
        <p class="text-lg md:text-xl mb-6 max-w-2xl mx-auto">
            Kami menyediakan layanan printing, percetakan, dan advertising berkualitas tinggi dengan hasil presisi.
        </p>
        <a href="#services"
           class="bg-[#00a2e9] hover:bg-[#fef100] hover:text-black text-white px-6 py-3 rounded-lg font-semibold transition transform hover:scale-105 active:scale-95">
            Lihat Layanan
        </a>
    </div>
</section>

{{-- ABOUT --}}
<section id="about" class="py-20 bg-gray-50" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-[#e62129] mb-4">Tentang Kami</h2>
        <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed">
            <strong>CV. Restu Guru Promosindo</strong> adalah perusahaan percetakan profesional yang melayani kebutuhan
            <strong>printing</strong>, <strong>percetakan</strong>, dan <strong>advertising</strong>. Kami hadir dengan
            teknologi modern dan tim berpengalaman untuk membantu bisnis Anda tampil menonjol melalui media cetak
            berkualitas tinggi.
        </p>
    </div>
</section>

{{-- STATISTIK / TRUST INDICATORS --}}
<section class="py-16 bg-white border-t border-gray-100" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-8 text-center">
    <div>
      <h3 class="text-4xl font-bold text-[#e62129]">10+</h3>
      <p class="text-gray-600">Tahun Pengalaman</p>
    </div>
    <div>
      <h3 class="text-4xl font-bold text-[#00a2e9]">300+</h3>
      <p class="text-gray-600">Proyek Selesai</p>
    </div>
    <div>
      <h3 class="text-4xl font-bold text-[#fef100]">150+</h3>
      <p class="text-gray-600">Klien Puas</p>
    </div>
    <div>
      <h3 class="text-4xl font-bold text-[#e62129]">20+</h3>
      <p class="text-gray-600">Produk Cetak</p>
    </div>
  </div>
</section>

{{-- SERVICES --}}
<section id="services" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-[#00a2e9] mb-12" data-aos="fade-up">Kategori Layanan</h2>

        <div class="grid md:grid-cols-3 gap-8">

            {{-- Indoor --}}
            <div class="group bg-white shadow-lg rounded-2xl p-8 border-t-4 border-[#e62129] transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl"
                 data-aos="zoom-in" data-aos-delay="100">
                <div class="flex justify-center mb-6">
                    <div class="w-full max-w-full aspect-[4/3] flex items-center justify-center overflow-hidden rounded-lg">
                        <img src="{{ asset('images/indoor-icon.jpg') }}" alt="Indoor"
                             class="object-contain w-full h-full transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-[#e62129] group-hover:text-[#00a2e9] transition-colors duration-300">
                    Indoor
                </h3>
                <p class="text-gray-600 text-base leading-relaxed">
                    Produk cetak untuk kebutuhan dalam ruangan seperti X-Banner, poster, brosur, dan lain-lain.
                </p>
            </div>

            {{-- Outdoor --}}
            <div class="group bg-white shadow-lg rounded-2xl p-8 border-t-4 border-[#00a2e9] transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl"
                 data-aos="zoom-in" data-aos-delay="200">
                <div class="flex justify-center mb-6">
                    <div class="w-full max-w-full aspect-[4/3] flex items-center justify-center overflow-hidden rounded-lg">
                        <img src="{{ asset('images/outdoor-icon.jpg') }}" alt="Outdoor"
                             class="object-contain w-full h-full transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-[#00a2e9] group-hover:text-[#e62129] transition-colors duration-300">
                    Outdoor
                </h3>
                <p class="text-gray-600 text-base leading-relaxed">
                    Cetak spanduk, billboard, baliho, dan media luar ruang tahan cuaca untuk promosi maksimal.
                </p>
            </div>

            {{-- Multi --}}
            <div class="group bg-white shadow-lg rounded-2xl p-8 border-t-4 border-[#fef100] transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl"
                 data-aos="zoom-in" data-aos-delay="300">
                <div class="flex justify-center mb-6">
                    <div class="w-full max-w-full aspect-[4/3] flex items-center justify-center overflow-hidden rounded-lg">
                        <img src="{{ asset('images/multi-icon.jpg') }}" alt="Multi"
                             class="object-contain w-full h-full transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-[#fef100] group-hover:text-[#00a2e9] transition-colors duration-300">
                    Multi
                </h3>
                <p class="text-gray-600 text-base leading-relaxed">
                    Produk fleksibel seperti stiker, label, kartu nama, dan merchandise branding.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- CLIENT LOGOS --}}
<section class="py-16 bg-gray-50 border-t border-gray-100" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#e62129] mb-10">Dipercaya oleh Berbagai Brand</h2>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center">
      <img src="{{ asset('images/client1.png') }}" alt="Client" class="opacity-70 hover:opacity-100 transition">
      <img src="{{ asset('images/client2.png') }}" alt="Client" class="opacity-70 hover:opacity-100 transition">
      <img src="{{ asset('images/client3.png') }}" alt="Client" class="opacity-70 hover:opacity-100 transition">
      <img src="{{ asset('images/client4.png') }}" alt="Client" class="opacity-70 hover:opacity-100 transition">
      <img src="{{ asset('images/client5.png') }}" alt="Client" class="opacity-70 hover:opacity-100 transition">
    </div>
  </div>
</section>

{{-- CTA --}}
<section id="contact" class="py-20 bg-[#00a2e9] text-white text-center" data-aos="zoom-in">
  <h2 class="text-3xl font-bold mb-4">Percetakan Cepat, Berkualitas, dan Tepat Waktu</h2>
  <p class="mb-6 max-w-2xl mx-auto">Kami hadir untuk membantu setiap kebutuhan cetak dan promosi bisnis Anda.</p>
  <a href="{{ route('contact') }}" class="bg-[#fef100] text-black px-8 py-3 rounded-lg font-semibold hover:bg-white transition">
    Hubungi Kami Sekarang
  </a>
</section>

@endsection
