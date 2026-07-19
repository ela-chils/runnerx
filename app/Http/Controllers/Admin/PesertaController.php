<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Pendaftaran::with('event')
                    ->latest()
                    ->get();

        return view('admin.peserta.index', compact('pesertas'));
    }


    public function lunas($id)
    {
        $peserta = Pendaftaran::findOrFail($id);

        $peserta->update([
            'status_pembayaran' => 'lunas'
        ]);

        return back()->with(
            'success',
            'Pembayaran berhasil dikonfirmasi'
        );
    }
}