<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = new Pelanggan();
        return view('admin.pelanggan.pelanggan', ['pelanggan' =>  $pelanggan->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        // tampilkan seluruh data table produk
        return view('admin.pelanggan.create', compact('pelanggan','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_tlp = $request->no_tlp;
        $pelanggan->jumlah_beli = $request->jumlah_beli;
        $pelanggan->produk_id = $request->produk_id;
        $pelanggan->save();
        return redirect ('admin/pelanggan');
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
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pelanggan = DB::table('pelanggan')->where('id', $id)->get();
         return view('admin.pelanggan.edit', compact('produk','pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_tlp = $request->no_tlp;
        $pelanggan->jumlah_beli = $request->jumlah_beli;
        $pelanggan->produk_id = $request->produk_id;
        $pelanggan->save();
        return redirect ('admin/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pelanggan')->where('id', $id)->delete();
        return redirect('admin\pelanggan');
    }
}
