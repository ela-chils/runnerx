<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisEvent;

class JenisEventController extends Controller
{
    public function index()
    {
        $jenisEvents = JenisEvent::latest()->get();

        return view('admin.jenis_event.index', compact('jenisEvents'));
    }


    public function create()
    {
        return view('admin.jenis_event.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required'
        ]);

        JenisEvent::create([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect()
            ->route('admin.jenis_event.index')
            ->with('success','Jenis event berhasil ditambahkan');
    }


    public function edit(JenisEvent $jenisEvent)
    {
        return view('admin.jenis_event.edit', compact('jenisEvent'));
    }


    public function update(Request $request, JenisEvent $jenisEvent)
    {
        $request->validate([
            'nama_jenis' => 'required'
        ]);

        $jenisEvent->update([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect()
            ->route('admin.jenis_event.index')
            ->with('success','Jenis event berhasil diperbarui');
    }


    public function destroy(JenisEvent $jenisEvent)
    {
        $jenisEvent->delete();

        return redirect()
            ->route('admin.jenis_event.index')
            ->with('success','Jenis event berhasil dihapus');
    }
}