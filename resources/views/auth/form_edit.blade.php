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
<form method="POST" action="{{route('auth.update',$edit->id)}}"
  enctype="multipart/form-data">
  @csrf
  @method('PUT')
   
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengirim</label> 
    <div class="col-8">
      <input id="nama" name="name" type="text" class="form-control" 
             value="{{ $edit->name }}" />
      
    </div>
  </div>
 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="nama" name="email" type="text" class="form-control"  
             value="{{ $edit->email }}" />
    </div>
  </div>
  
   <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Ubah Password</label> 
    <div class="col-8">
      <input id="nama" name="password" type="text" class="form-control" 
             value="{{ $edit->password }}" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="file" class="form-control" 
             value="" />
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