@extends('layouts.app')
@section('title', 'Profil Perusahaan')

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">Profil Perusahaan</h1>
        <p class="max-w-2xl mx-auto">
            Informasi singkat mengenai PT Solusi Koneksi Anda
        </p>
    </div>
</section>

{{-- KONTEN PROFIL --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-2 gap-12 items-start">

        {{-- LOGO --}}
        <div class="text-center">
            @if($profil && $profil->logo)
                <img src="{{ $profil->logo }}"
                     class="mx-auto h-80 mb-6 rounded-xl shadow-lg"
                        >
            @else
                <div class="h-40 flex items-center justify-center bg-gray-100 rounded">
                    <span class="text-gray-400">Logo Perusahaan</span>
                </div>
            @endif
        </div>

        {{-- DESKRIPSI --}}
        <div>
            <h2 class="text-2xl font-bold mb-4">
                {{ $profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda' }}
            </h2>

            <p class="text-gray-700 mb-6">
                {{ $profil->deskripsi ?? 'Deskripsi perusahaan belum tersedia.' }}
            </p>

            <div class="space-y-2 text-sm">
                <p><strong>Alamat:</strong> {{ $profil->alamat ?? '-' }}</p>
                <p><strong>Telepon:</strong> {{ $profil->telepon ?? '-' }}</p>
                <p><strong>Email:</strong> {{ $profil->email ?? '-' }}</p>
            </div>
        </div>

    </div>
</section>

@endsection
