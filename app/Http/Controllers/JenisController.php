<?php

namespace App\Http\Controllers;
use App\Models\JenisProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_produk = new JenisProduk();
        return view('admin.jenis_produk.jenis_produk', ['jenis_produk' =>  $jenis_produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // tampilkan sluruh data table kategori produk
        $jenis_produk = JenisProduk::all();
        // tampilkan seluruh data table produk
        return view('admin.jenis_produk.create', compact('jenis_produk'));
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
        $jenis_produk = new JenisProduk();
        $jenis_produk->nama_jenis = $request->nama_jenis;
        $jenis_produk->save();
        return redirect ('admin/jenis_produk');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table roduk
        //cari data yang ingin di hpus
        //hapus data menggunakan method delete
        DB::table('jenis_produk')->where('id', $id)->delete();
        return redirect('admin\jenis_produk');
    }
}
