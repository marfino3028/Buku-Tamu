<?php
//array scalar
$ar_gender = ['Mr.'=>'Mr.', 'Mrs.'=>'Mrs.'];
//ambil master data
$ar_tamu = App\Tamu::all();

?>
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

  <link href="<?php echo e(asset('css/webcamstyle.css')); ?>" rel="stylesheet">

<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
<!--//fonts--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
  <script language="JavaScript"></script>
</head>
<body>
  <!--background-->
<h1> Formulir Buku Tamu</h1>
    <div class="bg-agile">
  <div class="book-appointment">
  
            <div class="book-form agileits-login">
              <form action="<?php echo e(route('tamu.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="agileits_reservation_grid">
                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="nama" placeholder="Nama" required="">
                  </div> 
                </div>
                <div class="span1_of_1 phone_email1">
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fas fa-venus-mars" aria-hidden="true"></i>
                      <select name="gender" id="country1" onchange="change_country(this.value)" class="frm-field required">
                        <option value="">Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>         
                      </select>
                    </div>  
                  </div>

                <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fas fa-users" aria-hidden="true"></i>
                    <input type="text" name="keperluan" placeholder="Keperluan" required="">
                  </div>
                </div>
                
                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="no_telp" placeholder="Telepon" required="">
                  </div> 
                </div> 

                  <div class="span1_of_1 phone_email1">
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input name="instansi" type="text" value="" placeholder="Instansi/asalDaerah"  >

                    </div>          
                  </div>

                  <div class="span1_of_1 phone_email">
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input  id="datepicker1" name="tanggal_datang" type="text" value="" placeholder="Tanggal Kedatangan"  onfocus="this.value = 'dd-mm-yyyy';" onblur="if (this.value == 'dd-mm-yyyy') {this.value = 'dd-mm-yyyy';}" >
                    </div>          
                  </div>

                  <div class="span1_of_1 phone_email3">
                  <div id="my_camera">
                  </div>
                  <br>
                   <input type=button value="ambil foto" onClick="take_snapshot()">
                   <div id="results" ></div>
                   </div>
                  <div class="span1_of_1 phone_email1">
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fas fa-camera" aria-hidden="true"></i>
                      <select name="foto" id="country" onchange="change_country(this.value)" class="frm-field required">
                        <input value="" name="foto" type="file" class="form-control-file">                     
                      </select>
                    </div>  
                  </div>
                <input type="submit" value="Simpan">

                <div class="clear">
                  <br/>
                <center>
                <a href="<?php echo e(url('/')); ?>" style=" color: white; float: right; font-size: 15px; border-bottom: solid 1px;">Back</a>
                </center>
                </div>
              </form>
            </div>


      </div> 
    </div>
   </div>

 <div class="copy w3ls">
  <p style="font-family: monoscape; color: white;">© 2020 | Cyber &nbsp; R. A. Y. A.</p>
</div>
  <script src="<?php echo e(asset('js/webcam.min.js')); ?>"></script>
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

</body>
</html>

          
 <?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/tamu/form.blade.php ENDPATH**/ ?>