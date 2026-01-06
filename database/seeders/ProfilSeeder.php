<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
        'logo' => null,
        'nama_perusahaan'=> 'PT Solusi Koneksi Anda',
        'deskripsi' => 'PT Solusi Koneksi Anda adalah perusahaan yang bergerak di bidang solusi konektivitas dan layanan digital. Kami berkomitmen menghadirkan layanan yang andal, aman, dan efisien untuk mendukung produktivitas serta pertumbuhan bisnis di era digital. Dengan dukungan tim profesional dan teknologi yang tepat, kami siap menjadi mitra terpercaya dalam menyediakan solusi koneksi yang berkualitas dan berkelanjutan.',
        'alamat' => 'PT Solusi Koneksi Anda
        Jl. Raya Teknologi No. 21, Kelurahan Sukamaju, Kecamatan Cibinong, Kabupaten Bogor, Jawa Barat 16911
        Indonesia',
        'telepon' => '08123456789',
        'email' => 'solusikoneksi@gmail.com',
        ]);
    }
}
