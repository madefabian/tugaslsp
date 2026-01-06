@extends('layouts.app')
@section('title', 'Layanan')

@section('content')

{{-- HEADER --}}
<section class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
        <p class="max-w-2xl mx-auto">
            Kami menyediakan berbagai layanan teknologi dan konektivitas
            untuk mendukung kebutuhan bisnis Anda.
        </p>
    </div>
</section>

{{-- DAFTAR LAYANAN --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-3 gap-8">
        @forelse($services as $service)
            <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-lg transition">
                @if($service->icon)
                    <img src="{{ asset('storage/'.$service->icon) }}"
                         class="h-16 mx-auto mb-4">
                @endif

                <h3 class="font-semibold text-xl mb-2">
                    {{ $service->nama_layanan }}
                </h3>

                <p class="text-gray-600 text-sm">
                    {{ $service->deskripsi }}
                </p>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">
                Data layanan belum tersedia.
            </p>
        @endforelse
    </div>
</section>

@endsection
