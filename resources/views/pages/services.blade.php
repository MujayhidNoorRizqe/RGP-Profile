@extends('layouts.app')

@section('content')

{{-- =====================================================
     HERO SECTION — Ultra Clean Corporate
===================================================== --}}
<section class="pt-40 pb-28 bg-white fade-soft">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h1 class="text-4xl md:text-5xl font-extrabold text-[#0f0f0f] leading-tight">
            Layanan Percetakan Modern & Profesional
        </h1>

        <p class="text-gray-600 text-lg mt-4 max-w-2xl mx-auto">
            Solusi percetakan lengkap yang menggabungkan teknologi terbaru,
            konsistensi warna, dan estetika premium untuk kebutuhan visual brand masa kini.
        </p>

        <div class="w-28 h-[3px] mx-auto mt-8 rounded-full"
             style="background: var(--brand-blue);"></div>

    </div>
</section>



{{-- =====================================================
     KATEGORI UTAMA — Premium Icons Section
===================================================== --}}
<section class="py-24 bg-[#fafafa] fade-soft">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="section-title">Kategori Utama Layanan</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
             style="background: var(--brand-yellow);"></div>

        <div class="grid md:grid-cols-3 gap-14">

            {{-- Indoor --}}
            <div class="text-center group">
                <div class="w-20 h-20 rounded-2xl mx-auto flex items-center justify-center shadow-md bg-white
                            group-hover:-translate-y-1 transition">
                    <img src="{{ asset('images/icons/indoor.png') }}" class="w-10 opacity-80">
                </div>

                <h3 class="font-semibold text-xl mt-6" style="color: var(--brand-blue);">Indoor Printing</h3>

                <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                    Poster, brosur, booklet, signage ruangan, booth display, dan media promosi indoor lainnya.
                </p>
            </div>

            {{-- Outdoor --}}
            <div class="text-center group">
                <div class="w-20 h-20 rounded-2xl mx-auto flex items-center justify-center shadow-md bg-white
                            group-hover:-translate-y-1 transition">
                    <img src="{{ asset('images/icons/outdoor.png') }}" class="w-10 opacity-80">
                </div>

                <h3 class="font-semibold text-xl mt-6" style="color: var(--brand-red);">Outdoor Printing</h3>

                <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                    Baliho, branding kendaraan, billboard, neonbox, dan media publik berukuran besar.
                </p>
            </div>

            {{-- Multi --}}
            <div class="text-center group">
                <div class="w-20 h-20 rounded-2xl mx-auto flex items-center justify-center shadow-md bg-white
                            group-hover:-translate-y-1 transition">
                    <img src="{{ asset('images/icons/multi.png') }}" class="w-10 opacity-80">
                </div>

                <h3 class="font-semibold text-xl mt-6" style="color: var(--brand-yellow);">Multi Product</h3>

                <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                    Stiker, label produk, packaging branding, kartu nama, merchandise dan produk custom lainnya.
                </p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     SECTION — Why Work With Us
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="section-title">Mengapa Memilih Kami?</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
            style="background: var(--brand-blue);"></div>

        <div class="grid md:grid-cols-4 gap-10 text-center">

            <div>
                <h3 class="font-bold text-lg text-[#0f0f0f]">Presisi Warna</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Teknologi kalibrasi warna memastikan hasil cetak konsisten dari batch pertama hingga terakhir.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg text-[#0f0f0f]">Produksi Cepat</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Workflow digital mempersingkat waktu produksi tanpa mengurangi kualitas.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg text-[#0f0f0f]">Material Premium</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Bahan cetak berkualitas seperti vinyl, PVC, art paper, dan premium sticker.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg text-[#0f0f0f]">Kustomisasi Fleksibel</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Semua produk bisa menyesuaikan kebutuhan brand, ukuran, finishing, dan warna.
                </p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     WORKFLOW — 1–4 Soft Steps
===================================================== --}}
<section class="py-24 bg-[#fafafa] fade-soft">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="section-title">Alur Kerja Profesional</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
            style="background: var(--brand-yellow);"></div>

        <div class="grid md:grid-cols-4 gap-10 text-center">

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <div class="text-3xl font-bold text-[#0f0f0f]">01</div>
                <h3 class="font-semibold mt-2">Konsultasi</h3>
                <p class="text-gray-600 text-sm mt-2">Diskusi kebutuhan dan memilih jenis layanan terbaik.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <div class="text-3xl font-bold text-[#0f0f0f]">02</div>
                <h3 class="font-semibold mt-2">Desain</h3>
                <p class="text-gray-600 text-sm mt-2">Tim kami membantu memastikan desain siap cetak.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <div class="text-3xl font-bold text-[#0f0f0f]">03</div>
                <h3 class="font-semibold mt-2">Produksi</h3>
                <p class="text-gray-600 text-sm mt-2">Proses cetak dilakukan dengan mesin modern & material berkualitas.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <div class="text-3xl font-bold text-[#0f0f0f]">04</div>
                <h3 class="font-semibold mt-2">Finishing</h3>
                <p class="text-gray-600 text-sm mt-2">Proses pemotongan, laminasi, dan pengecekan kualitas akhir.</p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     GALLERY — Clean Grid
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="section-title">Hasil Karya Kami</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
            style="background: var(--brand-blue);"></div>

        <div class="grid md:grid-cols-3 gap-6">

            @foreach(['gallery1.jpg','gallery2.jpg','gallery3.jpg','gallery4.jpg','gallery5.jpg','gallery6.jpg'] as $img)
                <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="{{ asset('images/' . $img) }}"
                         class="w-full h-56 object-cover">
                </div>
            @endforeach

        </div>

    </div>
</section>


{{-- =====================================================
     CLIENT PORTFOLIO — Trusted By Many Brands
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="section-title">Dipercaya Banyak Brand</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
             style="background: var(--brand-blue);"></div>

        <p class="text-gray-600 max-w-xl mx-auto mb-12">
            Kami telah mendukung berbagai perusahaan, event organizer, UMKM, hingga brand nasional
            dalam memenuhi kebutuhan visual dan percetakan mereka.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">

            @foreach (['logo1.png','logo2.png','logo3.png','logo4.png'] as $logo)
                <div class="opacity-60 hover:opacity-100 transition">
                    <img src="{{ asset('images/clients/'.$logo) }}" class="mx-auto h-12 object-contain">
                </div>
            @endforeach

        </div>

    </div>
</section>



{{-- =====================================================
     EQUIPMENT SHOWCASE — Technology We Use
===================================================== --}}
<section class="py-24 bg-[#fafafa] fade-soft">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="section-title text-center">Teknologi & Peralatan Produksi</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-14 rounded-full"
             style="background: var(--brand-yellow);"></div>

        <p class="text-gray-600 text-center max-w-3xl mx-auto mb-14">
            Untuk menjaga kualitas dan konsistensi hasil cetak, kami menggunakan peralatan modern
            yang telah terkalibrasi dan berstandar industri.
        </p>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="bg-white rounded-2xl shadow p-6">
                <img src="{{ asset('images/equip/print1.jpg') }}"
                    class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="font-semibold text-lg">Large Format Printer</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Mesin cetak resolusi tinggi untuk kebutuhan billboard dan outdoor quality.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <img src="{{ asset('images/equip/print2.jpg') }}"
                    class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="font-semibold text-lg">Indoor UV Printer</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Hasil cetak tajam dan warna konsisten untuk kebutuhan indoor premium.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <img src="{{ asset('images/equip/print3.jpg') }}"
                    class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="font-semibold text-lg">Finishing & Cutting</h3>
                <p class="text-gray-600 text-sm mt-2">
                    Mesin finishing otomatis untuk hasil rapi dan presisi.
                </p>
            </div>

        </div>

    </div>
</section>



{{-- =====================================================
     FAQ — Frequently Asked Questions
===================================================== --}}
<section class="py-24 bg-white fade-soft">
    <div class="max-w-5xl mx-auto px-6">

        <h2 class="section-title text-center">Pertanyaan yang Sering Diajukan</h2>

        <div class="w-20 h-[3px] mx-auto mt-3 mb-12 rounded-full"
             style="background: var(--brand-blue);"></div>

        <div class="space-y-4">

            {{-- FAQ 1 --}}
            <details class="group bg-[#fafafa] p-5 rounded-xl border border-gray-200">
                <summary class="flex justify-between items-center cursor-pointer font-medium">
                    Berapa lama proses produksi?
                    <span class="transition-transform group-open:rotate-180">⌄</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3">
                    Estimasi produksi 1–3 hari tergantung jenis produk & antrian. Produk tertentu dapat selesai dalam 24 jam.
                </p>
            </details>

            {{-- FAQ 2 --}}
            <details class="group bg-[#fafafa] p-5 rounded-xl border border-gray-200">
                <summary class="flex justify-between items-center cursor-pointer font-medium">
                    Apakah bisa request desain?
                    <span class="transition-transform group-open:rotate-180">⌄</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3">
                    Ya, tim desain kami siap membantu menyiapkan file siap cetak sesuai kebutuhan Anda.
                </p>
            </details>

            {{-- FAQ 3 --}}
            <details class="group bg-[#fafafa] p-5 rounded-xl border border-gray-200">
                <summary class="flex justify-between items-center cursor-pointer font-medium">
                    Apakah menyediakan jasa pemasangan outdoor?
                    <span class="transition-transform group-open:rotate-180">⌄</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3">
                    Kami menyediakan layanan pemasangan untuk billboard, baliho, branding kendaraan,
                    signage, dan media outdoor lainnya.
                </p>
            </details>

        </div>

    </div>
</section>



{{-- =====================================================
     CTA — Final Premium Section
===================================================== --}}
<section class="py-24 bg-[#fafafa] text-center fade-soft">

    <h2 class="text-3xl font-bold text-[#0f0f0f]">
        Siap Tingkatkan Branding Bisnis Anda?
    </h2>

    <div class="w-20 h-[3px] mx-auto mt-3 mb-4 rounded-full"
         style="background: var(--brand-yellow);"></div>

    <p class="text-gray-600 max-w-xl mx-auto">
        Kami siap membantu kebutuhan cetak Anda dengan kualitas premium, detail presisi,
        dan pelayanan profesional.
    </p>

    <a href="{{ route('contact') }}" class="btn-primary mt-8 inline-block">
        Hubungi Kami
    </a>

</section>

@endsection
