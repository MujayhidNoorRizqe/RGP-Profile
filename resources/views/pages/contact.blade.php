@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/contact-bg.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-b from-[#00a2e9]/70 via-[#e62129]/40 to-black/60"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-down">
    <h1 class="text-5xl md:text-6xl font-bold mb-4">Hubungi Kami</h1>
    <p class="text-lg max-w-2xl mx-auto text-gray-100">
      Kami siap membantu setiap kebutuhan percetakan, promosi, dan advertising Anda.
    </p>
  </div>
</section>

{{-- CONTACT SECTION --}}
<section class="py-24 bg-gradient-to-b from-white via-[#f9fafc] to-[#eef7ff]" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

    {{-- CONTACT INFO --}}
    <div data-aos="fade-right">
      <h2 class="text-3xl font-bold text-[#e62129] mb-4">Informasi Kontak</h2>
      <p class="text-gray-700 mb-6">
        Jangan ragu untuk menghubungi kami. Tim kami akan dengan senang hati membantu dan memberikan solusi terbaik
        untuk kebutuhan cetak dan promosi Anda.
      </p>

      <ul class="space-y-5 text-gray-700">
        <li class="flex items-start gap-3">
          <i class="fa-solid fa-location-dot text-[#00a2e9] text-lg mt-1"></i>
          <span>Jl. Raya Cikarang No. 88, Cikarang, Bekasi – Jawa Barat</span>
        </li>
        <li class="flex items-start gap-3">
          <i class="fa-solid fa-phone text-[#00a2e9] text-lg mt-1"></i>
          <span>0812-3456-7890</span>
        </li>
        <li class="flex items-start gap-3">
          <i class="fa-solid fa-envelope text-[#00a2e9] text-lg mt-1"></i>
          <span>info@restugurupromosindo.co.id</span>
        </li>
        <li class="flex items-start gap-3">
          <i class="fa-solid fa-clock text-[#00a2e9] text-lg mt-1"></i>
          <span>Senin – Sabtu: 08.00 – 17.00</span>
        </li>
      </ul>

      {{-- Social Links --}}
      <div class="mt-8 flex space-x-4">
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#00a2e9] text-white rounded-full hover:bg-[#fef100] hover:text-black transition">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#e62129] text-white rounded-full hover:bg-[#fef100] hover:text-black transition">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#fef100] text-black rounded-full hover:bg-[#00a2e9] hover:text-white transition">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div>
    </div>

    {{-- CONTACT FORM --}}
    <div data-aos="fade-left" data-aos-delay="150">
      <h2 class="text-3xl font-bold text-[#00a2e9] mb-6">Kirim Pesan</h2>
      <form class="space-y-5 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" id="name" name="name"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9] transition">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9] transition">
        </div>
        <div>
          <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
          <input type="text" id="subject" name="subject"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9] transition">
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
          <textarea id="message" name="message" rows="5"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9] transition"></textarea>
        </div>
        <button type="submit"
                class="bg-[#e62129] text-white font-semibold px-6 py-3 rounded-lg hover:bg-[#00a2e9] w-full transition-all duration-300 transform hover:scale-105 active:scale-95">
          Kirim Pesan
        </button>
      </form>
    </div>

  </div>
</section>

{{-- MAP SECTION --}}
<section class="py-20 bg-white border-t border-gray-100" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl font-bold text-[#e62129] mb-6">Lokasi Kami</h2>
    <div class="rounded-2xl overflow-hidden shadow-lg">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4209755127166!2d107.150!3d-6.206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMjEuNyJTIDEwN8KwMDknMDAuMCJF!5e0!3m2!1sid!2sid!4v0000000000000!5m2!1sid!2sid"
        width="100%" height="400" style="border:0;" allowfullscreen loading="lazy">
      </iframe>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-r from-[#00a2e9] to-[#e62129] text-white text-center" data-aos="zoom-in">
  <h2 class="text-3xl font-bold mb-4">Siap Bekerja Sama?</h2>
  <p class="mb-6 max-w-2xl mx-auto text-gray-100">
    Hubungi kami hari ini untuk mendapatkan penawaran terbaik dan konsultasi gratis.
  </p>
  <a href="mailto:info@restugurupromosindo.co.id"
     class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-[#fef100] transition">
     Kirim Email Sekarang
  </a>
</section>

@endsection
