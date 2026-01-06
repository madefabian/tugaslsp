@extends('layouts.app')
@section('title', 'Kontak Kami')

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">Kontak Kami</h1>
        <p class="max-w-2xl mx-auto">
            Hubungi kami untuk informasi lebih lanjut mengenai layanan kami
        </p>
    </div>
</section>

{{-- KONTEN --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-2 gap-12">

        {{-- INFO PERUSAHAAN --}}
        <div class="space-y-4">
            <h2 class="text-2xl font-bold mb-4">
                Informasi Kontak
            </h2>

            <p>
                <strong>Nama Perusahaan:</strong><br>
                {{ $profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda' }}
            </p>

            <p>
                <strong>Alamat:</strong><br>
                {{ $profil->alamat ?? '-' }}
            </p>

            <p>
                <strong>Telepon:</strong><br>
                {{ $profil->telepon ?? '-' }}
            </p>

            <p>
                <strong>Email:</strong><br>
                {{ $profil->email ?? '-' }}
            </p>
        </div>

        {{-- FORM KONTAK --}}
        <div>
            <h2 class="text-2xl font-bold mb-4">
                Kirim Pesan
            </h2>

            <form class="space-y-4">
                <input type="text"
                       placeholder="Nama Lengkap"
                       class="w-full border rounded px-4 py-2">

                <input type="email"
                       placeholder="Email"
                       class="w-full border rounded px-4 py-2">

                <textarea rows="4"
                          placeholder="Pesan"
                          class="w-full border rounded px-4 py-2"></textarea>

                <button type="button"
                        class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">
                    Kirim Pesan
                </button>
            </form>
        </div>

    </div>
</section>

@endsection
