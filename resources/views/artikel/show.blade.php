@extends('layouts.app')
@section('title', $artikel->judul)

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">
            {{ $artikel->judul }}
        </h1>

        <p class="text-sm opacity-90">
            {{ $artikel->penulis ?? 'Admin' }}
            • {{ $artikel->published_at?->format('d M Y') }}
        </p>
    </div>
</section>

{{-- KONTEN --}}
<section class="max-w-4xl mx-auto px-6 py-20">

    @if ($artikel->thumbnail)
        <img
            src="{{ asset('storage/' . $artikel->thumbnail) }}"
            class="rounded-xl mb-10 w-full"
            alt="{{ $artikel->judul }}"
        >
    @endif

    <article class="prose max-w-none">
        {!! $artikel->konten !!}
    </article>

</section>

@endsection
