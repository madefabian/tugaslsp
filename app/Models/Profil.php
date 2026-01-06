<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Profil extends Model
{
    protected $fillable = [
        'logo',
        'nama_perusahaan',
        'deskripsi',
        'alamat',
        'telepon',
        'email',
    ];
    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value
                ? asset('storage/' . $value)
                : asset('logo/logo.png'),
        );
    }
}
