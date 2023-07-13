@extends('admin.layout.app')
@section('content')

@if ((Auth::user()->role !='pelanggan'))

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role =='admin')
            <a href="{{ url('admin/pelanggan/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Pelanggan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No tlp</th>
                        <th>Jumlah Beli</th>
                        <th>Produk id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @php
                       $no = 1;
                   @endphp
                   @foreach ($pelanggan as $pel)
                   <tr>
                    <td>{{$no}}</td>
                    <td>{{$pel->nama }}</td>
                    <td>{{$pel->jenis_kelamin }}</td>
                    <td>{{$pel->alamat }}</td>
                    <td>{{$pel->no_tlp }}</td>
                    <td>{{$pel->jumlah_beli}}</td>
                    <td>{{$pel->nama_produk }}</td>
                    <td><a href="{{ url('admin/pelanggan/edit/'. $pel->id) }}" class="btn btn-success">Edit</a></td>
                    @if (Auth::user()->role =='admin')
                    <td><a href="{{ url('admin/pelanggan/delete/'. $pel->id) }}" class="btn btn-danger">Delete</a></td>
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
