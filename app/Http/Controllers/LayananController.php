<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $rows = Layanan::all();
        return view('layanan.index', compact('rows'));
    }

    public function create()
    {
        return view('layanan.create');
    }

    public function store(Request $request)
    {
        Layanan::create([
            'lay_jenis' => $request->lay_jenis,
            'lay_harga' => $request->lay_harga
        ]);

        return redirect('layanan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $row = Layanan::find($id);
        return view('layanan.edit', compact('row'));
    }

    public function update(Request $request, string $id)
    {
        $row = Layanan::findOrFail($id);

        $row->update([
            'lay_jenis' => $request->lay_jenis,
            'lay_harga' => $request->lay_harga
        ]);

        return redirect('layanan');
    }

    public function destroy(string $id)
    {
        $row = Layanan::findOrFail($id);

        $row->delete();

        return redirect('layanan');
    }
}
