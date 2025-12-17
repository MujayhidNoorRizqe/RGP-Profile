@extends('adversting.admin.layouts.app') @section('content')

<h1 class="text-2xl font-bold text-gray-800 mb-8">Dashboard Overview</h1>

{{-- STAT CARDS --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-10">
    <div class="bg-white rounded-xl p-6 shadow-sm border">
        <p class="text-sm text-gray-500">Total Order</p>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border">
        <p class="text-sm text-gray-500">Produk</p>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border">
        <p class="text-sm text-gray-500">Pengunjung</p>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-xl p-6 shadow-sm border">
        <p class="text-sm text-gray-500">Pendapatan</p>
        <p class="text-3xl font-bold mt-2">Rp 0</p>
    </div>
</div>

{{-- WELCOME PANEL --}}
<div class="bg-white rounded-xl border p-6 shadow-sm">
    <h2 class="font-semibold text-gray-800 mb-2">
        Selamat Datang di Admin Panel
    </h2>

    <p class="text-sm text-gray-600 max-w-xl">
        Dashboard ini digunakan untuk mengelola konten website, layanan, dan
        data operasional Restu Guru Promosindo. Silakan pilih menu di sidebar
        untuk mulai mengelola data.
    </p>
</div>

@endsection
