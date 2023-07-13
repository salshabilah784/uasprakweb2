@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">jenis produk</li>
                        </ol>
                        </div>
                        <div class="card mb-4">
                        <div class="card-header">
                         <a href="{{ url('admin/jenis_produk/create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                jenis Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama_jenis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @php
                                           $no = 1;
                                       @endphp
                                       @foreach ($jenis_produk as $jen)
                                       <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$jen->nama_jenis }}</td>
                                        <td><a href="{{ url('admin/jenis_produk/delete/'. $jen->id) }}" class="btn btn-danger">Delete</a></td>
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
@endsection
