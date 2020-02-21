@extends('layouts.index')
@section('content')
@foreach ($data as $edit)
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('paket.update',$edit->idpaket)}}"
  enctype="multipart/form-data">
  @csrf
  @method('PUT')
   
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengirim</label> 
    <div class="col-8">
      <input id="nama" name="nama_pengirim" type="text" class="form-control" 
             value="{{ $edit->nama_pengirim }}" />
      
    </div>
  </div>
 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Instansi</label> 
    <div class="col-8">
      <input id="nama" name="instansi" type="text" class="form-control"  
             value="{{ $edit->instansi }}" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tipe Barang</label> 
    <div class="col-8">
      <select name="tipe_barang" class="form-control">
                    <option>Tipe Barang</option>
                    <option value="buku">Buku</option>
                    <option value="makanan">Makanan</option>
                    <option value="obat">Obat</option>
                    <option value="uang">Uang</option>
                    <option value="pakaian">Pakaian</option>
                    <option value="DLL">DLL</option>
                  </select>
        
    </div>
  </div>
   <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Penerima</label> 
    <div class="col-8">
      <input id="nama" name="nama_penerima" type="text" class="form-control" 
             value="{{ $edit->nama_penerima }}" />
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>
    </div>
  </div>
</form>
@endforeach
@endsection