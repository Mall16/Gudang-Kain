<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kain;
use PDF;

class kainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kain.index')->with([
            'kain' => Kain::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'warna' => 'required',
            'bahan' => 'required',
            'lebar' => 'required',
            'harga' => 'required',
        ]);

        $kain = new Kain;
        $kain-> nama_kain = $request->nama;
        $kain-> warna = $request->warna;
        $kain-> bahan = $request->bahan;
        $kain-> lebar = $request->lebar;
        $kain-> harga_per_meter = $request->harga;
        $kain->save();
        return to_route('kain.index')->with('success','Data Berhasil Ditambahkan!');
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
    public function edit(string $id_kain)
    {
        return view('kain.edit')->with([
            'kain'=> Kain::find($id_kain),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_kain)
    {
        $request -> validate([
            'nama' => 'required',
            'warna' => 'required',
            'bahan' => 'required',
            'lebar' => 'required',
            'harga' => 'required',
        ]);

        $kain = Kain::find( $id_kain );
        $kain-> nama_kain = $request->nama;
        $kain-> warna = $request->warna;
        $kain-> bahan = $request->bahan;
        $kain-> lebar = $request->lebar;
        $kain-> harga_per_meter = $request->harga;
        $kain->save();
        return to_route('kain.index')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_kain)
    {
        $kain = Kain::find($id_kain);
        $kain->delete();

        return back()->with('success','Data Berhasil Dihapus!');
    }

    public function kainPdf()
    {
        $kain = Kain::all();
        $pdf = PDF::loadView('kain.laporan',['kain'=>$kain])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('laporan_kain.pdf');
    }
}
