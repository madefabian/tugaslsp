<!DOCTYPE html>
<html lang="id">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - PT Solusi Koneksi Anda</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- NAVBAR --}}
<nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- NAMA PT --}}
        <a href="/" class="font-bold text-xl text-blue-700">
            PT Solusi Koneksi Anda
        </a>

        {{-- MENU --}}
        <div class="flex gap-6 text-sm font-semibold">
            <a href="/" class="{{ request()->is('/') ? 'text-blue-700' : 'text-gray-700' }}">
                Home
            </a>

            <a href="/profil" class="{{ request()->is('profil') ? 'text-blue-700' : 'text-gray-700' }}">
                Profil
            </a>

            <a href="/service" class="{{ request()->is('service') ? 'text-blue-700' : 'text-gray-700' }}">
                Layanan
            </a>

            <a href="/artikel" class="{{ request()->is('artikel*') ? 'text-blue-700' : 'text-gray-700' }}">
                Artikel
            </a>

            <a href="/galeri" class="{{ request()->is('galeri') ? 'text-blue-700' : 'text-gray-700' }}">
                Galeri
            </a>

            <a href="/kontak" class="{{ request()->is('kontak') ? 'text-blue-700' : 'text-gray-700' }}">
                Kontak
            </a>
        </div>
    </div>
</nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
<footer class="bg-[#0f0f0f] text-gray-300 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12">
        <!-- BRAND-->
                     <div>
            <img src="{{ asset('logo/logo.png') }}" alt="Logo"
                class=" h-56 w-full object-cover rounded-xl shadow-lg"
                 >
            </div>
        <div>
            <h3 class="text-2xl font-bold text-blue-500 mb-4">PT Solusi Koneksi Anda</h3>
            <p class="text-gray-400 mb-6 leading-relaxed">
               Solusi Koneksi & Teknologi Terpercaya.
            </p>

            <!-- SOCIAL ICONS -->
            <div class="flex space-x-4">
                <a href="#" class="bg-[#1d2535] p-3 rounded-full hover:bg-blue-500 transition">
                    <i class="fab fa-facebook-f text-white"></i>
                </a>
                <a href="#" class="bg-[#1d2535] p-3 rounded-full hover:bg-blue-500 transition">
                    <i class="fab fa-instagram text-white"></i>
                </a>
                <a href="#" class="bg-[#1d2535] p-3 rounded-full hover:bg-blue-500 transition">
                    <i class="fab fa-twitter text-white"></i>
                </a>
                <a href="#" class="bg-[#1d2535] p-3 rounded-full hover:bg-blue-500 transition">
                    <i class="fab fa-linkedin-in text-white"></i>
                </a>
            </div>

            <!-- MAPS -->
            <div class="mt-6 h-56 w-full object-cover rounded-xl shadow-lg">
                <h4 class="font-semibold text-lg mb-4 text-center">Lokasi Kami</h4>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.748388845014!2d106.77196987455936!3d-6.553416593439618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c386205f18f9%3A0xaf869d94c5b9c42a!2sSMK%20AK%20Nusa%20Bangsa!5e0!3m2!1sid!2sid!4v1765873037524!5m2!1sid!2sid"
                    width="100%"
                    height="200"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    
 <!-- KONTAK -->
<div>
    <h4 class="font-semibold text-lg mb-4">Kontak</h4>

    <ul class="space-y-4 text-gray-400">

<ul class="space-y-4 text-gray-400">

    <li class="flex items-start space-x-4">
        <i class="fas fa-map-marker-alt text-blue-500 text-xl mt-1"></i>
        <span>Jl. SukaMantan No.123, Jakarta Selatan 12345</span>
    </li>

    <li class="flex items-start space-x-4">
        <i class="fas fa-phone-alt text-blue-500 text-xl mt-1"></i>
        <a href="tel:+628123456789" class="hover:text-green-500 transition">
           +62 812-3456-789
        </a>
    </li>

    <li class="flex items-start space-x-4">
        <i class="fas fa-envelope text-blue-500 text-xl mt-1"></i>
        <a href="mailto:admin@konco.com" class="hover:text-green-500 transition">
           solusikoneksi@gmail.com
        </a>
    </li>

    <li class="flex items-start space-x-4">
        <i class="fab fa-whatsapp text-blue-500 text-xl mt-1"></i>
        <a href="https://wa.me/628123456789" class="hover:text-blue-500 transition">
           Chat via WhatsApp
        </a>
    </li>
</ul>
 </div>

</body>
</html>
