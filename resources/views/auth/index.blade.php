@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Email',
             'Password','Action'];
$no = 1;    
@endphp 

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Kelola Admin</h6>
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
             @foreach($ar_user as $users)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
               
                
                 <td>
                   <form method="POST" 
                  action="{{ route('auth.destroy',$users->id)}}">

                  <a href="{{ route('auth.show',$users->id) }}" 
                     class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>&nbsp;&nbsp; 
                  <a href="{{ route('auth.edit',$users->id) }}" 
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
                
               
            </tr>
          @endforeach   
          </tbody>    
          
        </table>
      </div>
    </div>
  </div>
@endsection