<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\JenisEvent;
use App\Models\Kota;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }


    public function create()
    {
        $jenisEvents = JenisEvent::all();
        $kotas = Kota::all();

        return view('admin.events.create', compact(
            'jenisEvents',
            'kotas'
        ));
    }


    public function store(Request $request)
    {
        $request->validate([

            'nama_event' => 'required',
            'jenis_event' => 'required',
            'tanggal' => 'required|date',
            'kota' => 'required',
            'harga' => 'required|numeric',
            'kuota_peserta' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'

        ]);


        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                              ->store('events', 'public');

        }


        Event::create([

            'nama_event' => $request->nama_event,
            'jenis_event' => $request->jenis_event,
            'tanggal' => $request->tanggal,
            'kota' => $request->kota,
            'harga' => $request->harga,
            'kuota_peserta' => $request->kuota_peserta,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,

        ]);


        return redirect()
            ->route('admin.events.index')
            ->with('success','Event berhasil ditambahkan');
    }



    public function edit(Event $event)
    {
        $jenisEvents = JenisEvent::all();
        $kotas = Kota::all();


        return view('admin.events.edit', compact(
            'event',
            'jenisEvents',
            'kotas'
        ));
    }



    public function update(Request $request, Event $event)
    {

        $request->validate([

            'nama_event' => 'required',
            'jenis_event' => 'required',
            'tanggal' => 'required|date',
            'kota' => 'required',
            'harga' => 'required|numeric',
            'kuota_peserta' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'

        ]);


        $data = [

            'nama_event' => $request->nama_event,
            'jenis_event' => $request->jenis_event,
            'tanggal' => $request->tanggal,
            'kota' => $request->kota,
            'harga' => $request->harga,
            'kuota_peserta' => $request->kuota_peserta,
            'deskripsi' => $request->deskripsi,

        ];


        if ($request->hasFile('gambar')) {

            $data['gambar'] = $request->file('gambar')
                                     ->store('events','public');

        }


        $event->update($data);


        return redirect()
            ->route('admin.events.index')
            ->with('success','Event berhasil diperbarui');
    }



    public function destroy(Event $event)
    {
        $event->delete();


        return redirect()
            ->route('admin.events.index')
            ->with('success','Event berhasil dihapus');
    }

}