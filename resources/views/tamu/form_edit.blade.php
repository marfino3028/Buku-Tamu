@extends('layouts.index')
@section('content')
@php

$ar_gender = ['L'=>'Mr.', 'P'=>'Mrs.'];


@endphp
@foreach ($data as $edit)

<form method="POST" action="{{route('tamu.update',$edit->id)}}"
  enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Tamu</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" 
      value="{{ $edit->nama }}" @error('nama') is-invalid @enderror" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4" name="gender">Jenis Kelamin</label> 
    <div class="col-8">


      <div class="form-check form-check-inline"  @error('gender') is-invalid @enderror">
        <input class="form-check-input" type="radio" name="gender" 
        value="L"/>Laki-laki
        <input class="form-check-input" type="radio" name="gender" 
        value="P"/>Perempuan    
      </div>
       @error('gender')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror   
      
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Instansi</label> 
    <div class="col-8">
      <input id="nama" name="instansi" type="text" class="form-control"  
      value="{{ $edit->instansi }}" />
    </div>
  </div>
  <div class="form-group row"  @error('tanggal_datang') is-invalid @enderror>
    <label for="nama" class="col-4 col-form-label">Tanggal Datang</label> 
    <div class="col-8">
      <input id="nama" name="tanggal_datang" type="date" class="form-control"  
      value="{{ $edit->tanggal_datang }}" />
       @error('tanggal_datang')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
  </div>
  
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="alamat" name="keperluan" cols="40" rows="5" class="form-control">{{ $edit->keperluan }}</textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="hp" class="col-4 col-form-label">HP</label> 
    <div class="col-8">
      <input id="hp" name="no_telp" value="{{ $edit->no_telp }}" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
      <input value="{{ $edit->foto }}" name="foto" type="file" class="form-control-file">
      foto maksimal 2 Mb

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