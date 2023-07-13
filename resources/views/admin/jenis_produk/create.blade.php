@extends('admin.layout.app')
@section('content')
{{--- buat baru code form ---}}
<form method="POST" action="{{ url('admin/jenis_produk/store')}}">
    {{ csrf_field() }}
    <div class="form-group row">
    <label for="nama_jenis" class="col-4 col-form-label">Nama jenis</label>
    <div class="col-8">
      <input id="nama_jenis" name="nama_jenis" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
@endsection
