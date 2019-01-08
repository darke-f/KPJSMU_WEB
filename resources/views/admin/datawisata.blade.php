@extends('layouts.admin')

@section('title')
        <a class="navbar-brand mr-1" href="#">Data Wisata</a>
@endsection

@section('content')

<form action="/submitbeli" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="namabarang">Nama Barang</label>
      <input type="text" class="form-control" id="namabarang" placeholder="Nama Barang">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="jumlahbarang">Jumlah Barang</label>
      <input type="text" class="form-control" id="jumlahbarang" placeholder="Jumlah Barang">
    </div>
    <div class="form-group col-md-2">
      <label for="satuanbarang">Satuan</label>
      <div class="input-group-prepend ">
        <select class="form-control" id="satuanbarang">
          <option>Other</option>
          <option>Unit</option>
          <option>Lusin</option>
        </select>
      </div>
    </div>
    <div class="form group col-md-2">
      <label for="satuanalt">Input satuan</label>
      <input type="text" class="form-control" placeholder="Satuan lain jika tidak ada" id="satuanalt">
    </div>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>



@endsection