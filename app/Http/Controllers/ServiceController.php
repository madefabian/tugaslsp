<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Profil;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index', [
            'services' => Service::all(),
        ]);
    }
}
