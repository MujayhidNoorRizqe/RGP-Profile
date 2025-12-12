@extends('layouts.app')

@section('content')

{{-- ================================================================
   DESKTOP VERSION — AURORA LAYOUT (BARU TOTAL)
================================================================ --}}
<div class="hidden md:block">

    {{-- =================== HERO =================== --}}
    <section class="relative pt-40 pb-32 overflow-hidden fade-soft">
        <div class="relative max-w-5xl mx-auto px-10 text-center">
            <h1 class="text-[3.4rem] font-extrabold leading-tight text-[#0f0f0f]">
                Hubungi <span class="hero-blue">Restu</span>
                <span class="hero-yellow">Guru</span><br>
                <span class="hero-red">Promosindo</span> Hari Ini
            </h1>

            <p class="mt-6 text-gray-600 text-lg max-w-2xl mx-auto">
                Dapatkan layanan konsultasi, pemesanan, dan dukungan teknis dari tim profesional kami.
                Kami hadir untuk melayani semua kebutuhan percetakan Anda.
            </p>

            <a href="https://wa.me/6282100000000"
               class="inline-block mt-8 px-10 py-4 rounded-xl bg-[var(--brand-blue)] text-white font-semibold shadow-lg hover:scale-105 transition">
                Chat via WhatsApp
            </a>
        </div>

    </section>




    {{-- =================== CONTACT INFO SECTION =================== --}}
    <section class="py-24 bg-white fade-soft">

        <div class="max-w-7xl mx-auto px-10 grid grid-cols-3 gap-10">

            {{-- PHONE CARD --}}
            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-[0_8px_25px_rgba(0,0,0,0.06)] hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-blue)] text-white text-3xl mb-6">
                    📞
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Telepon / WhatsApp</h3>
                <a href="https://wa.me/6282100000000"
                   target="_blank"
                   class="text-gray-600 text-base hover:text-[var(--brand-blue)] transition">
                    0821-0000-0000
                </a>
            </div>

            {{-- EMAIL --}}
            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-[0_8px_25px_rgba(0,0,0,0.06)] hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-red)] text-white text-3xl mb-6">
                    ✉️
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Email</h3>
                <p class="text-gray-600 text-base">restugurupromosindo@gmail.com</p>
            </div>

            {{-- LOCATION --}}
            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-[0_8px_25px_rgba(0,0,0,0.06)] hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-yellow)] text-black text-3xl mb-6">
                    📍
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Kantor Kami</h3>
                <p class="text-gray-600 text-base">5 Cabang Layanan</p>
            </div>

        </div>

    </section>




    {{-- =================== NEW CONTACT FORM SECTION =================== --}}
    <section class="py-24 bg-[#fafafa] fade-soft">

        <div class="max-w-6xl mx-auto px-10">

            <div class="p-14 rounded-3xl bg-white shadow-[0_18px_45px_rgba(0,0,0,0.07)] border border-gray-100">

                <h2 class="text-3xl font-bold text-[#0f0f0f] mb-10 text-center">Formulir Kontak</h2>

                <form class="grid grid-cols-2 gap-10">

                    <div>
                        <label class="font-semibold text-sm">Nama Lengkap</label>
                        <input type="text"
                               class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300
                                      focus:ring-2 focus:ring-[var(--brand-blue)] focus:border-transparent transition">
                    </div>

                    <div>
                        <label class="font-semibold text-sm">Email</label>
                        <input type="email"
                               class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300
                                      focus:ring-2 focus:ring-[var(--brand-blue)] focus:border-transparent transition">
                    </div>

                    <div class="col-span-2">
                        <label class="font-semibold text-sm">Nomor Telepon</label>
                        <input type="text"
                               class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300
                                      focus:ring-2 focus:ring-[var(--brand-blue)] focus:border-transparent transition">
                    </div>

                    <div class="col-span-2">
                        <label class="font-semibold text-sm">Pesan</label>
                        <textarea rows="6"
                                  class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300
                                         focus:ring-2 focus:ring-[var(--brand-blue)] focus:border-transparent transition"></textarea>
                    </div>

                    <div class="col-span-2 flex justify-center">
                        <button type="submit"
                                class="btn-primary px-14 py-4 rounded-xl font-bold text-lg tracking-wide">
                            Kirim Pesan
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </section>




    {{-- =================== LOCATION LIST + INTERACTIVE MAP =================== --}}
    <section class="pb-28 fade-soft">

        <div class="max-w-7xl mx-auto px-10">

            <h2 class="text-3xl font-bold text-[#0f0f0f] mb-10">Lokasi Kantor</h2>

            <div class="grid grid-cols-5 gap-6 mb-14">

                @php
                    $locations = [
                        ['name'=>'Banjarbaru', 'url'=>'https://share.google/GzpL00MrJd6TbIAxL'],
                        ['name'=>'Banjarmasin', 'url'=>'https://share.google/ehMxwll2Omvxy3lfs'],
                        ['name'=>'Martapura', 'url'=>'https://share.google/mFQHJPp4Zuz37EnQ3'],
                        ['name'=>'Liang Anggang', 'url'=>'https://share.google/ORm6DY2QUajm3OTXI'],
                        ['name'=>'Pelaihari', 'url'=>'https://share.google/JqIeeRNUiScfrJTDu'],
                    ];
                @endphp

                @foreach ($locations as $loc)
                <a href="{{ $loc['url'] }}" target="_blank"
                   class="group p-6 bg-white rounded-2xl shadow-[0_6px_20px_rgba(0,0,0,0.05)]
                          hover:shadow-xl transition border border-gray-200">

                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 rounded-full bg-[var(--brand-red)]
                                    group-hover:scale-125 transition"></div>

                        <p class="font-semibold text-gray-900 group-hover:text-[var(--brand-blue)] transition">
                            {{ $loc['name'] }}
                        </p>
                    </div>

                </a>
                @endforeach

            </div>


            {{-- MAP --}}
            <div class="rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.07)] border border-gray-200 h-[450px]">
                <div id="map" class="w-full h-full"></div>
            </div>

        </div>

    </section>

</div>



{{-- =================== GOOGLE MAPS SCRIPT =================== --}}
<script>
function initMap() {

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: { lat: -3.45, lng: 114.71 },
        mapId: "DEMO_MAP_ID"
    });

    const markers = [
        { name: "Banjarbaru", lat: -3.444, lng: 114.833 },
        { name: "Banjarmasin", lat: -3.319, lng: 114.590 },
        { name: "Martapura", lat: -3.411, lng: 114.845 },
        { name: "Liang Anggang", lat: -3.511, lng: 114.686 },
        { name: "Pelaihari", lat: -3.797, lng: 114.822 }
    ];

    markers.forEach(m => {
        new google.maps.Marker({
            position: { lat: m.lat, lng: m.lng },
            map,
            title: m.name,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
                scaledSize: new google.maps.Size(34, 34)
            }
        });
    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
        async defer></script>

@endsection
