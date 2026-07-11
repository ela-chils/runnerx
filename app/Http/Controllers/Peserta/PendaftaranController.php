<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{

    // tampilkan form pendaftaran
    public function create(Event $event)
    {
        return view(
            'peserta.pendaftaran.create',
            compact('event')
        );
    }


    // simpan pendaftaran
    public function store(Request $request, Event $event)
    {

        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'ukuran_jersey' => 'required',
            'kode_kupon' => 'nullable'
        ]);

        if($event->kuota_peserta <= 0){

            return back()
                ->withErrors([
                    'event'=>'Kuota event sudah penuh'
                ]);

        }

        $potongan = 0;

        switch ($request->kode_kupon) {
            case 'D-10':
                $potongan = 10000;
                break;

            case 'D-20':
                $potongan = 20000;
                break;

            case 'D-50':
                $potongan = 50000;
                break;
        }

        $hargaBayar = $event->harga - $potongan;

        Pendaftaran::create([

            'user_id' => Auth::id(),

            'event_id' => $event->id,

            'nama_lengkap' => $request->nama_lengkap,

            'email' => $request->email,

            'no_hp' => $request->no_hp,

            'jenis_kelamin' => $request->jenis_kelamin,

            'ukuran_jersey' => $request->ukuran_jersey,

            'kode_kupon' => $request->kode_kupon,

            'harga_awal' => $event->harga,

            'potongan' => $potongan,

            'harga_bayar' => $hargaBayar,

        ]);

        $event->decrement('kuota_peserta');

        return redirect()
            ->route('peserta.dashboard')
            ->with('success','Berhasil mendaftar event');

    }



    // event yang sudah dipilih
    public function index()
    {
        $pendaftaran = Pendaftaran::where(
            'user_id',
            Auth::id()
        )
        ->with('event')
        ->get();


        return view(
            'peserta.pendaftaran.index',
            compact('pendaftaran')
        );
    }

}