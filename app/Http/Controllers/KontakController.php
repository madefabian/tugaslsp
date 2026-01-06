<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index', [
            'profil' => Profil::first(),
        ]);
    }
}
