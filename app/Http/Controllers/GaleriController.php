<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galeri.index', [
            'galeris' => Galeri::latest()->get()
        ]);
    }
}
