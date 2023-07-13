<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
     'nama',
    'jenis_kelamin',
    'alamat',
    'no_tlp',
    'jumlah_beli',
    'produk_id',
    ];
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }

    public function getAllData(){
        $alldata = DB::table('pelanggan')
        ->join('produk','pelanggan.produk_id','=','produk.id')
        ->select('pelanggan.*','produk.id as nama_produk')
        ->get();
        return $alldata;
    }
}
