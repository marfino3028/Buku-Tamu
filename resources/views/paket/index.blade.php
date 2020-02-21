@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama Pengirim',
             'Instansi / Asal','Tipe barang','Nama penerima','Action'];
$no = 1;    
@endphp 
<!-------awal modal tambah data---------->
<!-- Button trigger modal -->

<!-------akhir modal tambah data---------->

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            @foreach($ar_judul as $jdl)    
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
             @foreach($ar_paket as $paket)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $paket->nama_pengirim }}</td>
                <td>{{ $paket->instansi }}</td>
                <td>{{ $paket->tipe_barang }}</td>
                <td>{{ $paket->nama_penerima }}</td>
                <td>
                   <form method="POST" 
                  action="{{ route('paket.destroy',$paket->idpaket)}}">

                  <a href="{{ route('paket.show',$paket->idpaket) }}" 
                     class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>&nbsp;&nbsp; 
                  <a href="{{ route('paket.edit',$paket->idpaket) }}" 
                      class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>&nbsp;&nbsp;  
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                    class="btn btn-danger btn-circle btn-sm" 
                    onclick="return confirm('anda yakin ingin menghapus?')">
                    <i class="fas fa-trash"></i>
                    </button>
                  </form>  
                </td>
               
            </tr>
          @endforeach   
          </tbody>    
          
        </table>
      </div>
    </div>
  </div>
@endsection