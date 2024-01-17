<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $bus = Bus::all();

        return view('home', compact('bus'));
    }

    public function cari(Request $request, Bus $bus)
    {
        $cari = $request->input('search');

        $bus = Bus::when($cari, function ($query) use ($cari) {
            return $query->where('nama_bus', 'like', '%' . $cari . '%');
        })->get();

        return view('home', compact('bus', 'cari'));
    }
}
