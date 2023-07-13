@extends('admin.layout.app')
@section('content')
@foreach ($pelanggan as $pel)

{{--- buat baru code form ---}}
<form method="POST" action="{{ url('admin/pelanggan/update/'. $pel->id)}}">
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" value="{{$pel->nama}}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <select id="jenis_kelamin" name="jenis_kelamin" value="{{$pel->jenis_kelamin}}"class="custom-select">
        <option value="perempuan">Perempuan</option>
        <option value="laki-laki">Laki-Laki</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label>
    <div class="col-8">
      <input id="alamat" name="alamat" value="{{$pel->alamat}}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_tlp" class="col-4 col-form-label">No tlp</label>
    <div class="col-8">
      <input id="no_tlp" name="no_tlp" value="{{$pel->no_tlp}}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label>
    <div class="col-8">
      <input id="jumlah_beli" name="jumlah_beli" value="{{$pel->jumlah_beli}}" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk id</label>
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
      @foreach ($produk as $prod)
        <option value="{{ $prod->id }}"> {{$prod->nama_produk}} </option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Simpan edit</button>
    </div>
  </div>
</form>
@endforeach
@endsection
