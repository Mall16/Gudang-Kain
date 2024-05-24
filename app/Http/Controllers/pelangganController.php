<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use PDF;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelanggan.index')->with([
            'pelanggan' => Pelanggan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'user' => 'required',
            'pass' => 'required',
            'email' => 'required',
        ]);

        $pelanggan = new Pelanggan;
        $pelanggan-> nama_pengguna = $request->nama;
        $pelanggan-> username = $request->user;
        $pelanggan-> password = $request->pass;
        $pelanggan-> email = $request->email;
        $pelanggan->save();
        return to_route('pelanggan.index')->with('success','Data Berhasil Ditambahkan!');
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
    public function edit(string $id_pengguna)
    {
        return view('pelanggan.edit')->with([
            'pelanggan'=> Pelanggan::find($id_pengguna),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pengguna)
    {
        $request -> validate([
            'nama' => 'required',
            'user' => 'required',
            'pass' => 'required',
            'email' => 'required',
            'harga' => 'required',
        ]);

        $pelanggan = Pelanggan::find( $id_pengguna );
        $pelanggan-> nama_pengguna = $request->nama;
        $pelanggan-> user = $request->user;
        $pelanggan-> password = $request->pass;
        $pelanggan-> email = $request->email;
        $pelanggan->save();
        return to_route('pelanggan.index')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pengguna)
    {
        $pelanggan = Pelanggan::find($id_pengguna);
        $pelanggan->delete();

        return back()->with('success','Data Berhasil Dihapus!');
    }

    public function pelangganPdf()
    {
        $pelanggan = Pelanggan::all();
        $pdf = PDF::loadView('pelanggan.laporan',['pelanggan'=>$pelanggan])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('laporan_pelanggan.pdf');
    }
}
