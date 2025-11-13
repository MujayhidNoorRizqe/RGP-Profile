@extends('layouts.app')

@section('content')

<section class="relative h-[60vh] flex items-center justify-center bg-cover bg-center"
         style="background-image: url('{{ asset('images/contact-bg.jpg') }}');">
  <div class="absolute inset-0 bg-[#00a2e9]/70"></div>
  <div class="relative z-10 text-center text-white px-6" data-aos="fade-down">
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Hubungi Kami</h1>
    <p class="text-lg max-w-2xl mx-auto">Kami siap membantu kebutuhan percetakan dan promosi Anda.</p>
  </div>
</section>

<section class="py-20 bg-gray-50" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">
    <div data-aos="fade-right">
      <h2 class="text-3xl font-bold text-[#e62129] mb-4">Informasi Kontak</h2>
      <p class="text-gray-700 mb-6">Silakan hubungi kami untuk konsultasi atau pemesanan.</p>
      <ul class="space-y-4 text-gray-700">
        <li><strong class="text-[#00a2e9]">Alamat:</strong> Jl. Raya Cikarang No. 88, Cikarang – Bekasi</li>
        <li><strong class="text-[#00a2e9]">Telepon:</strong> 0812-3456-7890</li>
        <li><strong class="text-[#00a2e9]">Email:</strong> info@restugurupromosindo.co.id</li>
      </ul>
      <div class="mt-8 flex space-x-4">
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#00a2e9] text-white rounded-full hover:bg-[#fef100] hover:text-black transition"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#e62129] text-white rounded-full hover:bg-[#fef100] hover:text-black transition"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#fef100] text-black rounded-full hover:bg-[#00a2e9] hover:text-white transition"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>

    <div data-aos="fade-left" data-aos-delay="150">
      <h2 class="text-3xl font-bold text-[#00a2e9] mb-4">Kirim Pesan</h2>
      <form class="space-y-4 bg-white p-8 rounded-2xl shadow-md">
        <div>
          <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9]">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9]">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Pesan</label>
          <textarea rows="5" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:ring-[#00a2e9] focus:border-[#00a2e9]"></textarea>
        </div>
        <button type="submit" class="bg-[#e62129] text-white font-semibold px-6 py-3 rounded-lg hover:bg-[#00a2e9] transition w-full">
          Kirim Pesan
        </button>
      </form>
    </div>
  </div>
</section>

<section class="py-16" data-aos="zoom-in">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-2xl font-bold text-[#e62129] mb-6 text-center">Lokasi Kami</h2>
    <div class="rounded-2xl overflow-hidden shadow-md">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="400" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</section>

@endsection
