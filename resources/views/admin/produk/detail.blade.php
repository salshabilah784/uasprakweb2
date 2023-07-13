@extends('admin.layout.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body> 
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama produk</th>
                        <th>Harga jual</th>
                        <th>Stok</th>
                        <th>Kode</th>
                        <th>Jenis Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    @php
    $no = 1;
    @endphp
   
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$produk->nama_produk }}</td>
                    <td>{{$produk->harga_jual }}</td>
                    <td>{{$produk->stok }}</td>
                    <td>{{$produk->kode }}</td>
                    <td>{{$produk->jenis_produk_id}}</td>
    @php
    $no++
    @endphp
</body>
</html>
        @endsection