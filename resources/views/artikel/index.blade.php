@extends('layouts.app')
@section('title', 'Artikel')

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">Artikel & Informasi</h1>
        <p class="max-w-2xl mx-auto">
            Berita, insight, dan informasi terbaru dari perusahaan kami
        </p>
    </div>
</section>

{{-- KONTEN --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-3 gap-8">

        @forelse ($artikels as $artikel)
            <a href="{{ route('artikel.show', $artikel->slug) }}"
               class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                @if ($artikel->thumbnail)
                    <img
                        src="{{ asset('storage/' . $artikel->thumbnail) }}"
                        class="h-48 w-full object-cover"
                        alt="{{ $artikel->judul }}"
                    >
                @endif

                <div class="p-6">
                    <h3 class="font-semibold text-lg mb-2">
                        {{ $artikel->judul }}
                    </h3>

                    <p class="text-sm text-gray-500">
                        {{ $artikel->penulis ?? 'Admin' }}
                        • {{ $artikel->published_at?->format('d M Y') }}
                    </p>
                </div>
            </a>
        @empty
            <p class="col-span-3 text-center text-gray-500">
                Belum ada artikel.
            </p>
        @endforelse

    </div>
</section>

@endsection
