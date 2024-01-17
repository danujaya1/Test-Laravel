<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use App\Models\Tiket;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function bookForm(Bus $bus)
    {
        return view('bus.book', compact('bus'));
    }

    public function book(Request $request, Bus $bus, User $user)
    {
        $user_id = auth()->user()->id;

        $tiket = new Tiket([
            'id_user' => $user_id,
            'id_bus' => $bus->id,
            'asal' => $request->input('asal'),
            'tujuan' => $request->input('tujuan'),
            'nama_penumpang' => $request->input('nama_penumpang'),
            'email_penumpang' => $request->input('email_penumpang'),
            'kursi' => $request->input('kursi'),
        ]);

        $tiket->save();
        // Simpan data pemesanan ke dalam database

        return redirect('/home')->with('success', 'Pemesanan berhasil');
    }

    public function ordertiket(Bus $bus)
    {
        $user_id = auth()->user()->id;

        $tikets = Tiket::where('id_user', $user_id)->get();

        return view('bus.tiket', compact('tikets'));
    }
}
