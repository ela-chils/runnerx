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
            'nik' => 'required|digits:16',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'ukuran_jersey' => 'required',
            'kode_kupon' => 'nullable'
        ]);

        $cekNik = Pendaftaran::where('nik', $request->nik)
            ->where('event_id', $event->id)
            ->exists();


        if($cekNik){

            return back()
                ->withErrors([
                    'nik' => 'NIK sudah terdaftar pada event ini.'
                ])
                ->withInput();

        }

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

        $jumlahPesertaEvent = Pendaftaran::where(
            'event_id',
            $event->id
        )->count();


        $nomorBib = 'BIB-' . str_pad(
            $jumlahPesertaEvent + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        $data = new Pendaftaran();

$data->user_id = Auth::id();
$data->event_id = $event->id;
$data->nama_lengkap = $request->nama_lengkap;
$data->email = $request->email;
$data->nik = $request->nik;
$data->no_hp = $request->no_hp;
$data->jenis_kelamin = $request->jenis_kelamin;
$data->ukuran_jersey = $request->ukuran_jersey;
$data->kode_kupon = $request->kode_kupon;
$data->harga_awal = $event->harga;
$data->potongan = $potongan;
$data->harga_bayar = $hargaBayar;
$data->kode_bib = $nomorBib;

$data->save();

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