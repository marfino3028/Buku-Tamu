<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>FORMULIR KUNJUNGAN</title>
  <!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //Meta tags -->
  <!-- font-awesome-icons -->
  <link href="<?php echo e(asset('css/booking.font-awesome.css')); ?>" rel="stylesheet"> 
  <!-- //font-awesome-icons -->
  <!-- Stylesheet -->
  <link href="<?php echo e(asset('css/style.booking.css')); ?>" rel='stylesheet' type='text/css' />
  <!-- //Stylesheet -->
  <link href="<?php echo e(asset('css/fontawesome-all.css')); ?>" rel="stylesheet">

  <!--fonts--> 
  <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Roboto:300,400,500,700')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')); ?>" rel="stylesheet">
  <!--//fonts--> 
</head>
<body>
  <!--background-->
    <div class="bg-agile">
  <div class="book-appointment">
  <h2 align="center">silahkan isi data diri anda</h2>

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <hr> 

          <div class="book-form agileits-login">
              <form action="#" method="post">
                <div class="agileits_reservation_grid">
                <div class="phone_email">   
                    </div>
          <div class="bg-agile">
            <select id="gender" onchange="gender(this.value)" class="frm-field required">
                        <option value="">Mr.</option>
                        <option value="">Mrs.</option>   
                      </select>
            <div class="form-text">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>

            </div>
          </div>

          <div class="bg-agile">
            <div class="form-text">
              <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="form-control" name="organisasi" id="organisasi" placeholder="Organisasi/Instansi" required>
          </div>
          </div>

          <div class="bg-agile">
            <div class="form-text">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="form-control" name="number" id="number" placeholder="No.Telepon">
          </div>
          </div>

        <div class="bg-agile">
             <textarea id="keperluan" name="keperluan" cols="65" rows="6" class="form-control" placeholder="Keperluan. ."></textarea>
          </div>

          <div id="my_camera">
          </div>
          <br>
          <button type="submit">Take Picture</button>
          <br>
          <hr>
          <button align="right" type="submit" class="btn btn-primary">Selesai</button>
      </div>
    </div>
  </div>
            <div class="span1_of_1 phone_email1">
              <!-- start_section_room -->
              <div id="my_camera">
               </div>
            </div>
        </form>
      </div>  
   </div>
 </div>



 <div class="copy w3ls">
  <p>&copy;Design by <a href="http://w3layouts.com/" target="_blank"></a> </p>
</div>
<!--//copyright-->
<script type="text/javascript" src="<?php echo e(asset('js/jquery-2.1.4.min.booking.js')); ?>"></script>
<!-- Calendar -->
<link rel="stylesheet" href="<?php echo e(asset('css/booking.jquery-ui.css')); ?>" />
<script src="<?php echo e(asset('js/jquery-ui.booking.js')); ?>"></script>
<script>
  $(function() {
    $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
  });
</script>
<!-- //Calendar -->
<script src="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js')); ?>" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo e(url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js')); ?>" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js')); ?>"></script>
<script language="JavaScript">
  Webcam.set({
    width: 120,
    height: 80,
    image_format: 'jpeg',
    jpeg_quality: 90
  });
  Webcam.attach( '#my_camera' );
</script>

</body>
</html>
 <?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/layouts/formtamu.blade.php ENDPATH**/ ?>