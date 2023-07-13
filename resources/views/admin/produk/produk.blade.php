@extends('admin.layout.app')
@section('content')

@if ((Auth::user()->role !='pelanggan'))

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role =='admin')
            <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
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
                   @foreach ($produk as $prod)
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$prod->nama_produk }}</td>
                    <td>{{$prod->harga_jual }}</td>
                    <td>{{$prod->stok }}</td>
                    <td>{{$prod->kode }}</td>
                    <td>{{$prod->nama_jenis}}</td>
                    <td><a href="{{ url('admin/produk/edit/'. $prod->id) }}" class="btn btn-success">Edit</a></td>
                    @if (Auth::user()->role =='admin')
                    <td><a href="{{ url('admin/produk/detail/'. $prod->id) }}" class="btn btn-info">Detail</a></td>
                    <td><a href="{{ url('admin/produk/delete/'. $prod->id) }}" class="btn btn-danger">Delete</a></td>
                    @endif
                   </tr>
                   @php
                      $no++
                   @endphp
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
@include('admin.access_danied')
@endif
@endsection
