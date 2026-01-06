@extends('layouts.app')
@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Solusi Koneksi & Teknologi Terpercaya
            </h1>

            <p class="mb-8 text-lg text-blue-100">
                PT Solusi Koneksi Anda menyediakan layanan IT, jaringan, dan solusi digital
                untuk mendukung perkembangan bisnis Anda secara berkelanjutan.
            </p>

            <div class="flex gap-4">
                <a href="#services"
                   class="bg-white text-blue-700 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition">
                    Lihat Layanan
                </a>

                <a href="/kontak"
                   class="border border-white px-6 py-3 rounded font-semibold hover:bg-white hover:text-blue-700 transition">
                    Hubungi Kami
                </a>
            </div>
        </div>

        <div>
            <img src="{{ asset('logo/logo.png') }}" alt="Logo"
                 class="rounded-xl shadow-lg">
        </div>

    </div>
</section>

{{-- PROFIL SINGKAT --}}
<section class="max-w-7xl mx-auto px-6 py-20 text-center">
    <h2 class="text-3xl font-bold mb-6">
        Tentang Perusahaan
    </h2>

    <p class="max-w-3xl mx-auto text-gray-600 text-lg">
        Kami adalah perusahaan yang bergerak di bidang solusi konektivitas dan teknologi
        informasi, berkomitmen memberikan layanan terbaik dengan dukungan tim profesional
        dan berpengalaman.
    </p>
</section>

{{-- LAYANAN --}}
<section id="services" class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl font-bold">
                Layanan Kami
            </h2>

            <a href="/service"
               class="text-blue-600 font-semibold hover:underline">
                Lihat Semua →
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($services->take(3) as $service)
            <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">

                @if($service->icon)
                    <img src="{{ asset('storage/'.$service->icon) }}"
                         class="h-16 mx-auto mb-4">
                @endif

                <h3 class="font-semibold text-lg mb-2">
                    {{ $service->nama_layanan }}
                </h3>

                <p class="text-sm text-gray-600">
                    {{ $service->deskripsi }}
                </p>

            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
