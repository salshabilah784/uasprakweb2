@extends('admin.layout.app')
@section('content')
{{--- buat baru code form ---}}
<form method="POST" action="{{ url('admin/produk/store')}}">
    {{ csrf_field() }}
    <div class="form-group row">
    <label for="nama_produk" class="col-4 col-form-label">Nama produk</label>
    <div class="col-8">
      <input id="nama_produk" name="nama_produk" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_jual" class="col-4 col-form-label">Harga jual</label>
    <div class="col-8">
      <input id="harga_jual" name="harga_jual" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label>
    <div class="col-8">
      <input id="stok" name="stok"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <input id="kode" name="kode"  type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label>
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
      @foreach ($jenis_produk as $jen)
        <option value="{{ $jen->id }}"> {{$jen->nama_jenis}} </option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
@endsection
