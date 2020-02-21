@extends('layouts.index')

<link rel="stylesheet" href="{{ asset('css/show.css')}}">
<link href="{{asset('welcome/css/font-awesome.css') }}" rel="stylesheet"> 


@section('content')
@foreach ($ar_user as $users)

<div class="row">
  <section class="container">


    <!--Profile Card 3-->
    <div class="col-md-4">
      <div class="card profile-card-3">
        <div class="background-block">
          <img src="{{asset('images/bgprofile.jpg')}}" alt="profile-sample1" class="background"/>
        </div>
        <div class="profile-thumb-block">
           @if(!empty($users->foto))   
          <img src="{{asset('images')}}/{{ $users->foto }}" alt="profile-image" class="profile"/>
           @else
           <img src="{{asset('images/profile.png')}}" alt="profile-image" class="profile"/>
            @endif
          <!-- The Modal -->
          
        </div>
        <div class="card-content">
          <h2>{{ $users->name }}<p>{{ $users->email }}</p></h3>
            <h3>status: {{ $users->role }}</h3>
          </div>
        </div>

      </div>
      @endforeach

    </section>
  </div>

  <br>
  <a href="{{ url('/auth') }}" 
  class="btn btn-info btn-lg">
Kembali</a>
@endsection
