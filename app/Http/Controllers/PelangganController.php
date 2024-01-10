<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        pelanggan::create([
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp

        ]);

        return redirect('pelanggan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $row = Pelanggan::find($id);
        return view('pelanggan.edit', compact('row'));
    }

    public function update(Request $request, string $id)
    {
        $row = pelanggan::findOrFail($id);

        $row->update([
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp
        ]);

        return redirect('pelanggan');
    }

    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->delete();

        return redirect('pelanggan');
    }
}
