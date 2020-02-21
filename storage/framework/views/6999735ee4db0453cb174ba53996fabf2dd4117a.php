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

  <!--fonts--> 
  <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Roboto:300,400,500,700')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')); ?>" rel="stylesheet">
  <!--//fonts--> 
</head>
<body>
  <!--background-->
<h1> Resort Booking Form</h1>
    <div class="bg-agile">
  <div class="book-appointment">
  <h2>Booking Now</h2>
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
                <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="Keperluan" placeholder="Keperluan" required="">
                  </div>
                </div>
                
                <div class="phone_email">
                  <div class="form-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="no_telp" placeholder="Phone number" required="">
                  </div> 
                </div> 
                <div class="phone_email phone_email1">
                  <div class="form-text">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="Email" required="">
                  </div>
                </div>
                  
                
                  <div class="span1_of_1 phone_email1">
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input name="instansi" type="text" value="" placeholder="Instansi"  >

                    </div>          
                  </div>
                  <div class="span1_of_1 phone_email">
                    <div class="book_date"> 
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input  id="datepicker1" name="tanggal_datang" type="text" value="" placeholder="Departure Date"  onfocus="this.value = 'dd-mm-yyyy';" onblur="if (this.value == 'dd-mm-yyyy') {this.value = 'dd-mm-yyyy';}" class="clear">

                    </div>          
                  </div>
                  <div class="span1_of_1">
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <select name="foto" id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="">Foto</option>
                        
                                            
                                               
                      </select>
                    </div>  
                  </div>
                  <div class="span1_of_1 phone_email1">
                    <!-- start_section_room -->
                    <div class="section_room">
                      <i class="fa fa-h-square" aria-hidden="true"></i>
                      <select name="gender" id="country1" onchange="change_country(this.value)" class="frm-field required">
                        <option value="">Gender</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs. </option>         
                        
              
                      </select>
                    </div>  
                  </div>
                  <div class="clear"></div>
                </div> 
                <input type="submit" value="Book Now">
                <div class="clear"></div>
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


</body>
</html>

          
 <?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/layouts/form.blade.php ENDPATH**/ ?>