<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;
use PDF;

class pemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemasok.index')->with([
            'pemasok' => Pemasok::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemasok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        $pemasok = new Pemasok;
        $pemasok-> nama_pemasok = $request->nama;
        $pemasok-> alamat = $request->alamat;
        $pemasok-> telepon = $request->telepon;
        $pemasok-> email = $request->email;
        $pemasok->save();
        return to_route('pemasok.index')->with('success','Data Berhasil Ditambahkan!');
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
    public function edit(string $id_pemasok)
    {
        return view('pemasok.edit')->with([
            'pemasok'=> Pemasok::find($id_pemasok),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pemasok)
    {
        $request -> validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'harga' => 'required',
        ]);

        $pemasok = Pemasok::find( $id_pemasok );
        $pemasok-> nama_pemasok = $request->nama;
        $pemasok-> alamat = $request->alamat;
        $pemasok-> telepon = $request->telepon;
        $pemasok-> email = $request->email;
        $pemasok->save();
        return to_route('pemasok.index')->with('success','Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pemasok)
    {
        $pemasok = Pemasok::find($id_pemasok);
        $pemasok->delete();

        return back()->with('success','Data Berhasil Dihapus!');
    }

    public function pemasokPdf()
    {
        $pemasok = Pemasok::all();
        $pdf = PDF::loadView('pemasok.laporan',['pemasok'=>$pemasok])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('laporan_pemasok.pdf');
    }
}
