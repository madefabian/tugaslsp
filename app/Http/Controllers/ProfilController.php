<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.index', [
            'profil' => Profil::first(),
        ]);
    }
}
