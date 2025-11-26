@extends('layouts.app')

@section('content')

{{-- ==============================
    HERO SECTION — Fullscreen Parallax Modern
================================ --}}
<section class="relative h-[95vh] flex items-center justify-center overflow-hidden bg-fixed bg-center bg-cover"
         style="background-image: url('{{ asset('images/printing-bg.jpg') }}');">

    {{-- Dynamic Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-[#e62129]/50 to-[#00a2e9]/70 backdrop-blur-[1px]"></div>

    {{-- Pattern & Glow --}}
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-light.png') }}')] opacity-10 bg-repeat animate-pulse-slow"></div>

    {{-- Hero Content --}}
    <div class="relative z-10 text-center text-white px-6" data-aos="fade-up" data-aos-duration="1200">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight drop-shadow-[0_4px_10px_rgba(0,0,0,0.4)]">
            Cetak Masa Depan <br><span class="text-[#fef100]">Dengan Presisi</span>
        </h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8 text-gray-100 leading-relaxed">
            Layanan printing, percetakan, dan advertising profesional dengan teknologi mutakhir dan hasil yang memukau.
        </p>
        <a href="#whyus"
           class="inline-block bg-[#fef100] text-black font-semibold px-10 py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-white transition-all duration-300 transform hover:scale-105 active:scale-95">
           Jelajahi Layanan Kami
        </a>
    </div>
</section>


{{-- ==============================
    WHY CHOOSE US
================================ --}}
<section id="whyus" class="py-24 bg-gradient-to-b from-white via-[#f9fafc] to-[#eef7ff]" data-aos="fade-up">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-[#e62129] mb-6">Kenapa Memilih Kami?</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">Kami menggabungkan <strong>teknologi printing modern</strong>,
       desain kreatif, dan pengalaman lebih dari <strong>10 tahun</strong> untuk menghadirkan hasil yang sempurna.</p>

    <div class="grid md:grid-cols-4 gap-10">
      @php
        $features = [
          ['icon' => 'fa-bolt', 'color' => '#00a2e9', 'title' => 'Cepat & Efisien', 'desc' => 'Waktu pengerjaan cepat tanpa mengorbankan kualitas hasil cetak.'],
          ['icon' => 'fa-crown', 'color' => '#e62129', 'title' => 'Kualitas Premium', 'desc' => 'Hasil tajam, warna akurat, dan material terbaik di setiap produk.'],
          ['icon' => 'fa-lightbulb', 'color' => '#fef100', 'title' => 'Desain Kreatif', 'desc' => 'Tim desain kami siap membantu Anda tampil profesional dan berbeda.'],
          ['icon' => 'fa-handshake', 'color' => '#00a2e9', 'title' => 'Layanan Ramah', 'desc' => 'Kami mengutamakan kepuasan pelanggan dengan komunikasi terbuka.'],
        ];
      @endphp

      @foreach ($features as $index => $f)
      <div class="group bg-white shadow-lg p-8 rounded-2xl border-t-4 transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl"
           style="border-color: {{ $f['color'] }}" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
        <div class="text-center mb-4 text-[{{ $f['color'] }}]">
          <i class="fa-solid {{ $f['icon'] }} text-4xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">{{ $f['title'] }}</h3>
        <p class="text-gray-600 text-sm leading-relaxed">{{ $f['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- ==============================
    SHOWCASE / PORTFOLIO
================================ --}}
<section id="showcase" class="py-24 bg-white" data-aos="fade-up">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-[#00a2e9] mb-4">Hasil Karya & Proyek Kami</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-12">Beberapa contoh hasil cetak dari berbagai kategori layanan kami.</p>

    <div class="grid md:grid-cols-3 gap-8">
      @php
        $projects = [
          ['img' => 'indoor-icon.jpg', 'title' => 'Indoor Printing', 'color' => '#e62129'],
          ['img' => 'outdoor-icon.jpg', 'title' => 'Outdoor Advertising', 'color' => '#00a2e9'],
          ['img' => 'multi-icon.jpg', 'title' => 'Multi Product', 'color' => '#fef100'],
        ];
      @endphp

      @foreach ($projects as $index => $p)
      <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500"
           data-aos="zoom-in" data-aos-delay="{{ $index * 150 }}">
        <img src="{{ asset('images/' . $p['img']) }}" alt="{{ $p['title'] }}"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all duration-500"
             style="background-color: {{ $p['color'] }}CC;">
          <h3 class="text-lg font-bold">{{ $p['title'] }}</h3>
          <span class="text-sm opacity-80">Presisi & Profesional</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- ==============================
    CLIENT LOGOS
================================ --}}
<section class="py-20 bg-gradient-to-b from-[#eef7ff] to-white border-t" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#e62129] mb-10">Dipercaya oleh Brand Ternama</h2>
    <div class="flex flex-wrap justify-center gap-10 opacity-80">
      @foreach (range(1,5) as $c)
        <img src="{{ asset('images/restugurulogo.webp') }}" alt="Client" class="h-14 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105">
      @endforeach
    </div>
  </div>
</section>


{{-- ==============================
    CTA SECTION
================================ --}}
<section id="contact" class="relative py-24 bg-gradient-to-r from-[#00a2e9] to-[#e62129] text-white text-center overflow-hidden" data-aos="zoom-in">
  <div class="relative z-10 max-w-4xl mx-auto px-6">
    <h2 class="text-4xl font-bold mb-6">Percetakan Cepat, Presisi, dan Berkualitas</h2>
    <p class="text-base md:text-lg mb-8 max-w-2xl mx-auto opacity-90">
      Wujudkan ide kreatif bisnis Anda menjadi media promosi yang menginspirasi dan menjual.
    </p>
    <a href="{{ route('contact') }}" class="bg-white text-black font-semibold px-10 py-3 rounded-lg shadow-md hover:bg-[#fef100] hover:scale-105 transition-all duration-300">
      Hubungi Kami Sekarang
    </a>
  </div>

  <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-light.png') }}')] opacity-10 bg-repeat"></div>
</section>

@endsection
