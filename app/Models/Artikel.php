<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'thumbnail',
        'konten',
        'penulis',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->judul);
        });
    }
}
