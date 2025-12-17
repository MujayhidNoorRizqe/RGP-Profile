@extends('adversting.layouts.app')

@section('content')

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
            </p>

            <a href="https://wa.me/6282100000000"
                class="inline-block mt-8 px-10 py-4 rounded-xl bg-[var(--brand-blue)] text-white font-semibold shadow-lg hover:scale-105 transition">
                Chat via WhatsApp
            </a>
        </div>
    </section>


    {{-- =================== CONTACT INFO =================== --}}
    <section class="py-24 bg-white fade-soft">
        <div class="max-w-7xl mx-auto px-10 grid grid-cols-3 gap-10">

            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-blue)] text-white text-3xl mb-6">
                    📞
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Telepon / WhatsApp</h3>
                <a href="https://wa.me/6282100000000" target="_blank"
                    class="text-gray-600 text-base hover:text-[var(--brand-blue)] transition">0821-0000-0000</a>
            </div>

            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-red)] text-white text-3xl mb-6">
                    ✉️
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Email</h3>
                <p class="text-gray-600 text-base">restugurupromosindo@gmail.com</p>
            </div>

            <div class="p-10 rounded-3xl bg-[#fafafa] shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-[var(--brand-yellow)] text-black text-3xl mb-6">
                    📍
                </div>
                <h3 class="font-bold text-xl text-[#0f0f0f] mb-2">Kantor Kami</h3>
                <p class="text-gray-600 text-base">5 Cabang Layanan</p>
            </div>

        </div>
    </section>


    {{-- =================== CONTACT FORM =================== --}}
    <section class="py-24 bg-[#fafafa] fade-soft">
        <div class="max-w-6xl mx-auto px-10">
            <div class="p-14 rounded-3xl bg-white shadow-xl border border-gray-100">

                <h2 class="text-3xl font-bold text-center mb-10">Formulir Kontak</h2>

                <form class="grid grid-cols-2 gap-10">
                    <div>
                        <label class="font-semibold text-sm">Nama Lengkap</label>
                        <input type="text"
                            class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300 focus:ring-2 focus:ring-[var(--brand-blue)] transition">
                    </div>

                    <div>
                        <label class="font-semibold text-sm">Email</label>
                        <input type="email"
                            class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300 focus:ring-2 focus:ring-[var(--brand-blue)] transition">
                    </div>

                    <div class="col-span-2">
                        <label class="font-semibold text-sm">Nomor Telepon</label>
                        <input type="text"
                            class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300 focus:ring-2 focus:ring-[var(--brand-blue)] transition">
                    </div>

                    <div class="col-span-2">
                        <label class="font-semibold text-sm">Pesan</label>
                        <textarea rows="6"
                            class="w-full mt-2 px-5 py-4 rounded-xl bg-white border border-gray-300 focus:ring-2 focus:ring-[var(--brand-blue)] transition"></textarea>
                    </div>

                    <div class="col-span-2 flex justify-center">
                        <button type="submit" class="btn-primary px-14 py-4 rounded-xl font-bold text-lg tracking-wide">
                            Kirim Pesan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>


    {{-- =================== LOCATIONS + MAP =================== --}}
    <section class="pb-28 fade-soft">
        <div class="max-w-7xl mx-auto px-10">

            <h2 class="text-3xl font-bold mb-10">Lokasi Kantor</h2>

            <div class="grid grid-cols-5 gap-6 mb-14">

                @php
                    $locs = [
                        ['name'=>'Banjarbaru','lat'=>-3.4350783761483177, 'lng'=>114.83227244079488],
                        ['name'=>'Banjarmasin','lat'=>-3.3233445478656582, 'lng'=>114.59932744482137],
                        ['name'=>'Martapura','lat'=>-3.419410285260144, 'lng'=>114.85092401483392],
                        ['name'=>'Liang Anggang','lat'=>-3.444314558174713, 'lng'=>114.70243204232882],
                        ['name'=>'Pelaihari','lat'=>-3.7373461345105414, 'lng'=>114.79656686498814],
                    ];
                @endphp

                @foreach ($locs as $loc)
                <button class="group p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition border border-gray-200 location-btn"
                    data-lat="{{ $loc['lat'] }}"
                    data-lng="{{ $loc['lng'] }}"
                    onclick="focusMarker(this)">

                    <div class="flex items-center gap-3">
                        <span class="font-semibold text-gray-900 group-hover:text-[var(--brand-blue)] transition">
                            {{ $loc['name'] }}
                        </span>
                        <span class="text-[var(--brand-red)] text-xl">●</span>
                    </div>

                </button>
                @endforeach

            </div>

            <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-200 h-[450px]">
                <div id="map" class="w-full h-full"></div>
            </div>

        </div>
    </section>

</div>


{{-- =================== GOOGLE MAPS SCRIPT =================== --}}
<script>
let map;

function initMap() {
    const styleLight = [
        { elementType: "geometry", stylers: [{ color: "#f5f5f5" }] },
        { elementType: "labels.icon", stylers: [{ visibility: "off" }] },
        { elementType: "labels.text.fill", stylers: [{ color: "#616161" }] },
        { elementType: "labels.text.stroke", stylers: [{ color: "#f5f5f5" }] },
        { featureType: "poi", stylers: [{ visibility: "off" }] },
        { featureType: "road", elementType: "geometry", stylers: [{ color: "#ffffff" }] },
        { featureType: "water", stylers: [{ color: "#c9e6ff" }] }
    ];

    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: { lat: -3.44, lng: 114.75 },
        styles: styleLight,
        gestureHandling: "cooperative",
        streetViewControl: false,
        fullscreenControl: true
    });

    const markers = [
        { name: "Banjarbaru", lat: -3.4350783761483177, lng: 114.83227244079488 },
        { name: "Banjarmasin", lat: -3.3233445478656582, lng: 114.59932744482137 },
        { name: "Martapura", lat: -3.419410285260144, lng: 114.85092401483392 },
        { name: "Liang Anggang", lat: -3.444314558174713, lng: 114.70243204232882 },
        { name: "Pelaihari", lat: -3.7373461345105414, lng: 114.79656686498814 }
    ];

    markers.forEach(m => {
        new google.maps.Marker({
            position: { lat: m.lat, lng: m.lng },
            title: m.name,
            map,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
                scaledSize: new google.maps.Size(34, 34)
            }
        });
    });
}

function focusMarker(btn) {
    const lat = parseFloat(btn.dataset.lat);
    const lng = parseFloat(btn.dataset.lng);

    map.setZoom(12);
    map.panTo({ lat, lng });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbcp49KfrgTuEU-ciFTHEsFbo4Hc02zVY&callback=initMap"
    async defer></script>

@endsection
