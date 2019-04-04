<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use Session;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuks = BarangMasuk::all();
        return view('pages.barangmasuk.view')->withBarangMasuks($barangmasuks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('pages.barangmasuk.add')->withSuppliers($suppliers);
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
            'nama_barang' => 'required',
            'tgl_masuk' => 'required',
            'jumlah_masuk' => 'required',
            'supplier_id' => 'required|numeric'
        ));

        $barangmasuk = new BarangMasuk;
        $barangmasuk->nama_barang = $request->nama_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->jumlah_masuk = $request->jumlah_masuk;
        $barangmasuk->supplier_id = $request->supplier_id;
        $barangmasuk->save();

        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangmasuk = BarangMasuk::find($id);
        return view('pages.barangmasuk.show')->withBarangMasuk($barangmasuk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangmasuk = BarangMasuk::find($id);
        $suppliers = Supplier::all();

        $supps = array();

        foreach ($suppliers as $supplier) {
            $supps[$supplier->id] = $supplier->nama;
        }

        return view('pages.barangmasuk.edit')->withBarangMasuk($barangmasuk)->withSuppliers($supps);
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
        $barangmasuk = BarangMasuk::find($id);
        $this->validate($request, array(
            'nama_barang' => 'required',
            'tgl_masuk' => 'required',
            'jumlah_masuk' => 'required',
            'supplier_id' => 'required|numeric'
        ));

        $barangmasuk->nama_barang = $request->nama_barang;
        $barangmasuk->tgl_masuk = $request->tgl_masuk;
        $barangmasuk->jumlah_masuk = $request->jumlah_masuk;
        $barangmasuk->supplier_id = $request->supplier_id;

        $barangmasuk->save();
        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangmasuk = BarangMasuk::find($id);
        $barangmasuk->delete();
        return redirect()->route('barangmasuk.index')->with('success', 'Barang Masuk berhasil di hapus!');
    }
}
