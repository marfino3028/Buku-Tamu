@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Gender',
             'Instansi / Asal','No. Telp','Keperluan','Tanggal Datang','Action'];
$no = 1;    
$users = DB::table('tamu')->count();


@endphp 
<!-------awal modal tambah data---------->

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kunjungan Tamu</h6>
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
             @foreach($ar_tamu as $tamu)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tamu->nama }}</td>
                <td>{{ $tamu->gender }}</td>
                <td>{{ $tamu->instansi }}</td>
                <td>{{ $tamu->no_telp }}</td>
                <td>{{ $tamu->keperluan }}</td>
                <td>{{ $tamu->tanggal_datang }}</td>
                <td>
                  <form method="POST" 
                  action="{{ route('tamu.destroy',$tamu->id)}}">

                  <a href="{{ route('tamu.show',$tamu->id) }}" 
                     class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>&nbsp;&nbsp; 
                  <a href="{{ route('tamu.edit',$tamu->id) }}" 
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