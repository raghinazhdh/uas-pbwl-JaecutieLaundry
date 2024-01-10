<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Layanan;
use PDF;

class TransaksiController extends Controller
{
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    public function create()
    {
        $currentUser = auth()->user();

        $getpel = Pelanggan::all();
        $getlay = Layanan::all();

        return view('transaksi.create', compact('getpel', 'getlay', 'currentUser'));
    }

    public function store(Request $request)
    {

        $pel_id = Pelanggan::where('pel_nama', $request->pel_nama)->value('pel_id');
        $lay_id = Layanan::where('lay_jenis', $request->lay_jenis)->value('lay_id');
        $user_id = auth()->user()->id;

        $hargakg = Layanan::where('lay_id', $request->lay_id)->value('lay_harga');

        $trans_berat = $request->trans_berat;
        $trans_total = $trans_berat * $hargakg;

        Transaksi::create([
            'trans_pel_id' => $request->pel_id,
            'trans_lay_id' => $request->lay_id,
            'trans_berat' => $trans_berat,
            'trans_total' => $trans_total,
            'trans_tgl_masuk' => $request->trans_tgl_masuk,
            'trans_tgl_selesai' => $request->trans_tgl_selesai,
            'user_id' => $user_id,
        ]);

        return redirect('transaksi');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $row = Transaksi::with(['layanan', 'pelanggan', 'users'])->find($id);
        $getpel = Pelanggan::all();
        $getuser = User::all();
        $getlay = Layanan::all();
        $currentUser = auth()->user();

        return view('transaksi.edit', compact('row', 'getpel', 'getlay', 'getuser', 'currentUser'));
    }

    public function update(Request $request, string $id)
    {

        $hargakg = Layanan::where('lay_id', $request->lay_id)->value('lay_harga');
        $user_id = auth()->user()->id;
        $trans_berat = $request->trans_berat;
        $trans_total = $trans_berat * $hargakg;

        Transaksi::find($id)->update([
            'trans_pel_id' => $request->pel_id,
            'trans_lay_id' => $request->lay_id,
            'trans_berat' => $trans_berat,
            'trans_total' => $trans_total,
            'trans_tgl_masuk' => $request->trans_tgl_masuk,
            'trans_tgl_selesai' => $request->trans_tgl_selesai,
            'user_id' => $user_id,
        ]);

        return redirect('transaksi');
    }

    public function downloadpdf($id)
    {
        $rows = Transaksi::all(); // Replace YourModel with the actual model name and retrieve the data

        // Check if the record exists
        if (!$rows) {
            abort(404);
        }

         $pdf = PDF::loadView('transaksi/cetak', compact('rows'))->setOptions(['defaultFont' => 'sans-serif']);
         $pdf->setpaper('A4','potrait');
        return $pdf->stream('transaksi.pdf');
    }

    public function destroy(string $id)
    {
        Transaksi::destroy($id);

        return redirect('transaksi');
    }
}
