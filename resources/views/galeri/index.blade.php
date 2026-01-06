@extends('layouts.app')
@section('title', 'Galeri Kegiatan')

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">Galeri Kegiatan</h1>
        <p>Dokumentasi kegiatan PT Solusi Koneksi Anda</p>
    </div>
</section>

{{-- GALERI --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-3 gap-8">

        @forelse($galeris as $galeri)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            @if($galeri->gambar)
                <img src="{{ asset('storage/'.$galeri->gambar) }}"
                     class="h-56 w-full object-cover">
            @endif

            <div class="p-4">
                <h3 class="font-semibold">{{ $galeri->judul }}</h3>
                <p class="text-sm text-gray-600 mt-2">
                    {{ $galeri->deskripsi }}
                </p>
            </div>
        </div>
        @empty
        <p class="col-span-3 text-center text-gray-500">
            Belum ada galeri.
        </p>
        @endforelse

    </div>
</section>

@endsection
