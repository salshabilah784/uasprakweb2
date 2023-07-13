<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'nama_produk',
        'harga_jual',
        'stok',
        'kode',
        'jenis_produk_id',
    ];
    public function jenis_produk(){
        return $this->belongsTo(JenisProduk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->join('jenis_produk','produk.jenis_produk_id','=','jenis_produk.id')
        ->select('produk.*','jenis_produk.id as nama_jenis')
        ->get();
        return $alldata;
    }
}
