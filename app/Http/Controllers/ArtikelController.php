<?php

namespace App\Http\Controllers;

use App\Models\Artikel;


class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.index', [
            'artikels' => Artikel::whereNotNull('published_at')
                ->latest()
                ->get()
        ]);
    }

    public function show($slug)
    {
        return view('artikel.show', [
            'artikel' => Artikel::where('slug', $slug)->firstOrFail()
        ]);
    }
}
