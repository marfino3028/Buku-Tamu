@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="{{ asset('css/show.css')}}">


<div class="card shadow mb-10">

    @foreach ($ar_tamu as $peng)
    <div class="card-header py-3">
  <h5 class="m-0 font-weight-bold text-primary">Profile Tamu</h5>
    </div>
    <div class="card-body">
      <div class="text-center">
        @if(!empty($peng->foto))
            <img id="myImg" style="width:100%;max-width:300px"
                 src="{{asset('images')}}/{{ $peng->foto }}" />
        @else
            <img  style="width:100%;max-width:300px"
                 src="{{asset('img/no-photo.jpg')}}" alt="">
        @endif
          <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
      </div>
      <br>
      <div class="alert alert-dismissable alert-primary">
         Nama              : {{ $peng->nama }} <br/>
          Instansi / Alamat  : {{ $peng->instansi }} <br/>
          No. HP            : {{ $peng->no_telp }} <br/>
          Keperluan         : {{ $peng->keperluan }} <br/>
      </div>
      
    @endforeach
  </div>
  </div>
    <br>
      <div>
      <a rel="nofollow" href="{{ url('/tamu') }}" class="btn btn-info btn-lg">Kembali</a>
    </div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
@endsection


<!-- class="img-fluid px-3 px-sm-4 mt-3 mb-4" -->