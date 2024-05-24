<?php

namespace App\Http\Controllers;

use App\Models\Kain;
use App\Models\Pemasok;
use App\Models\Stok;
use Illuminate\Http\Request;
use PDF;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = Stok::with(['kain','pemasok'])->get();
        return view('stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kain = Kain::all();
        $pemasok = Pemasok::all();

        return view('stok.create', compact('kain','pemasok'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id_kain' => 'required',
            'jumlah' => 'required',
            'tanggalM' => 'required',
            'tanggalK' => 'required',
            'id_pemasok' => 'required',
        ]);

        $stok = new Stok;
        $stok-> id_kain = $request->id_kain;
        $stok-> jumlah = $request->jumlah;
        $stok-> tanggal_masuk = $request->tanggalM;
        $stok-> tanggal_keluar = $request->tanggalK;
        $stok-> id_pemasok = $request->id_pemasok;
        $stok->save();
        return to_route('stok.index')->with('success','Data Berhasil Ditambahkan!');
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
    public function edit(Stok $stok)
    {
        $kain = Kain::all();
        $pemasok = Pemasok::all();

        return view('stok.edit', compact('stok','kain','pemasok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stok $stok)
    {
        $validated = $request -> validate([
            'id_kain' => 'required',
            'jumlah' => 'required',
            'tanggalM' => 'required',
            'tanggalK' => 'required',
            'id_pemasok' => 'required',
        ]);

        $stok -> update($validated);
        return redirect()->route('stok.index')->with('success','Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_stok)
    {
        $stok = Stok::find($id_stok);
        $stok->delete();

        return back()->with('success','Data Berhasil Dihapus!');
    }
    public function stokPdf()
    {
        $stok= Stok::all();
        $pdf = PDF::loadView('stok.laporan',['stok'=>$stok])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('laporan_stok.pdf');
    }
}
