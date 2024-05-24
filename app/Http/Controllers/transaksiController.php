<?php

namespace App\Http\Controllers;

use App\Models\Kain;
use App\Models\Transaksi;
use PDF;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with(['kain'])->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kain = Kain::all();

        return view('transaksi.create', compact('kain'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id_kain' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'ket' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi-> id_kain = $request->id_kain;
        $transaksi-> jenis_transaksi = $request->jenis;
        $transaksi-> jumlah = $request->jumlah;
        $transaksi-> tanggal = $request->tanggal;
        $transaksi-> keterangan = $request->ket;
        $transaksi->save();
        return to_route('transaksi.index')->with('success','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $kain = Kain::all();

        return view('transaksi.edit', compact('transaksi','kain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validated = $request -> validate([
            'id_kain' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'ket' => 'required',
        ]);

        $transaksi -> update($validated);
        return redirect()->route('transaksi.index')->with('success','Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->delete();

        return back()->with('success','Data Berhasil Dihapus!');
    }
    public function transaksiPdf()
    {
        $transaksi= Transaksi::all();
        $pdf = PDF::loadView('transaksi.laporan',['transaksi'=>$transaksi])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('laporan_transaksi.pdf');
    }
}
