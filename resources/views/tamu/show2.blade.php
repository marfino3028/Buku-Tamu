@extends('layouts.index')
@section('content')

<div class="card shadow mb-4">
    @foreach ($ar_tamu as $tamu)
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profile Tamu</h6>
    </div>
    <div class="card-body">
     <div class="text-center">
        @if(!empty($tamu->foto))
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" 
                 src="{{asset('images')}}/{{ $tamu->foto }}"  />   
        @else
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" 
                 src="{{asset('images/41.jpg')}}" alt="">
        @endif
      </div>
      <div class="alert alert-dismissable alert-primary">
          Nama: {{ $tamu->nama }} <br/>
          Jenis Kelamin : {{ $tamu->gender }} <br/>
          No Telp: {{ $tamu->no_telp }} <br/>
          Instansi : {{ $tamu->instansi }} <br/>
          Keperluan : {{ $tamu->keperluan }} <br/>
          Tanggal Datang : {{ $tamu->tanggal_datang }} <br/>
          
         
      </div>
      @endforeach
    <a href="{{ url('/tamu') }}" 
       class="btn btn-info btn-lg">
        Kembali</a>
    </div>
  </div>
@endsection