<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' =>  $produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // tampilkan sluruh data table kategori produk
        $jenis_produk = JenisProduk::all();
        $produk = Produk::all();
        // tampilkan seluruh data table produk
        return view('admin.produk.create', compact('jenis_produk','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunkan parameter request
        // lalu di masukan ke dalam kolom table
        // save data yang sudah diambil menggunakan parameter request dengan method save()
        // kembalikan ke tampilan ke view produk setelah mengklik button simpan
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->kode = $request->kode;
        $produk->jenis_produk_id = $request->jenis_produk_id;
        $produk->save();
        return redirect ('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        $jenis_produk = JenisProduk::find($id);

        return view('admin.produk.detail', compact('produk','jenis_produk'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $jenis_produk = DB::table('jenis_produk')->get();
       $produk = DB::table('produk')->where('id', $id)->get();
       return view('admin.produk.edit', compact('produk','jenis_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunkan parameter request
        // lalu di masukan ke dalam kolom table
        // save data yang sudah diambil menggunakan parameter request dengan method save()
        // kembalikan ke tampilan ke view produk setelah mengklik button simpan
        $produk = Produk::find($request->id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->kode = $request->kode;
        $produk->jenis_produk_id = $request->jenis_produk_id;
        $produk->save();
        return redirect ('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table roduk
        //cari data yang ingin di hpus
        //hapus data menggunakan method delete
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin\produk');
    }
}
