<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kotas = Kota::latest()->get();

        return view('admin.kota.index', compact('kotas'));
    }


    public function create()
    {
        return view('admin.kota.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required'
        ]);

        Kota::create([
            'nama_kota' => $request->nama_kota
        ]);

        return redirect()
            ->route('admin.kota.index')
            ->with('success','Kota berhasil ditambahkan');
    }


    public function edit(Kota $kota)
    {
        return view('admin.kota.edit', compact('kota'));
    }


    public function update(Request $request, Kota $kota)
    {
        $request->validate([
            'nama_kota' => 'required'
        ]);

        $kota->update([
            'nama_kota' => $request->nama_kota
        ]);

        return redirect()
            ->route('admin.kota.index')
            ->with('success','Kota berhasil diperbarui');
    }


    public function destroy(Kota $kota)
    {
        $kota->delete();

        return redirect()
            ->route('admin.kota.index')
            ->with('success','Kota berhasil dihapus');
    }
}