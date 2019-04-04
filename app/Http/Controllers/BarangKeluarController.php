<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Supplier;
use Session;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluars = BarangKeluar::all();
        return view('pages.barangkeluar.view')->withBarangKeluars($barangkeluars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = BarangMasuk::orderBy('nama_barang', 'asc')->get();
        return view('pages.barangkeluar.add')->withBarangs($barangs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'barang_masuk_id' => 'required',
            'tgl_keluar' => 'required',
            'jumlah_keluar' => 'required',
            'lokasi' => 'required',
            'penerima' => 'required'
        ));

        $barangkeluar = new BarangKeluar;

        $barangkeluar->barang_masuk_id = $request->barang_masuk_id;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;
        $barangkeluar->jumlah_keluar = $request->jumlah_keluar;
        $barangkeluar->lokasi = $request->lokasi;
        $barangkeluar->penerima = $request->penerima;

        $barangkeluar->save();

        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangkeluar = BarangKeluar::find($id);
        return view('pages.barangkeluar.show')->withBarangKeluar($barangkeluar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangkeluar = BarangKeluar::find($id);
        $barangmasuks = BarangMasuk::all();

        $masuk = array();

        foreach ($barangmasuks as $barangmasuk) {
            $masuk[$barangmasuk->id] = $barangmasuk->nama_barang;
        }
        return view('pages.barangkeluar.edit')->withBarangKeluar($barangkeluar)->withBarangMasuks($masuk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barangkeluar = BarangKeluar::find($id);
        $this->validate($request, array(
            'barang_masuk_id' => 'required',
            'tgl_keluar' => 'required',
            'jumlah_keluar' => 'required',
            'lokasi' => 'required',
            'penerima' => 'required'
        ));

        $barangkeluar->barang_masuk_id = $request->barang_masuk_id;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;
        $barangkeluar->jumlah_keluar = $request->jumlah_keluar;
        $barangkeluar->lokasi = $request->lokasi;
        $barangkeluar->penerima = $request->penerima;


        $barangkeluar->save();

        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangkeluar = BarangKeluar::find($id);
        $barangkeluar->delete();
        return redirect()->route('barangkeluar.index')->with('success', 'Barang Keluar berhasil di hapus!');
    }
}
