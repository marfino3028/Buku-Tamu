@extends('layouts.index')
@section('content')

<div class="card shadow mb-4">
    @foreach ($ar_paket as $paket)
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $paket->nama_pengirim }}</h6>
    </div>
    <div class="card-body">
    
      <div class="alert alert-dismissable alert-primary">
          Nama: {{ $paket->nama_pengirim }} <br/>
          Instansi : {{ $paket->instansi }} <br/>
          Tipe Barang : {{ $paket->tipe_barang }} <br/>
          Nama Penerima : {{ $paket->nama_penerima }} <br/>
          
         
      </div>
      @endforeach
    <a href="{{ url('/paket') }}" 
       class="btn btn-info btn-lg">
        Kembali</a>
    </div>
  </div>
@endsection