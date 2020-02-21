<!DOCTYPE html>
<html>
<head>
<title>FORMULIR KIRIM PAKET</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freight Shipping Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="<?php echo e(asset('asset3/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('asset3/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo e(asset('asset3/js/jquery-2.2.3.min.js')); ?>"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href="<?php echo e(asset('asset3//fonts.googleapis.com/css?family=Roboto:300,400,500,700')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('asset3//fonts.googleapis.com/css?family=Poller+One')); ?>" rel="stylesheet">
<!-- //web-fonts --> 
</head>
 <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>">
<body>
	<!-- banner -->  
	
	    <div class="w3ls-agileinfo">
		
          <h1> Formulir Kirim Paket </h1>	
          <br/>
          <br/>
		 <div class="bg-agile">
		 <div class="top-icons-agileits-w3layouts">
		 	<center>
			<p><i class="fa fa-check-square-o" aria-hidden="true"></i></p>
			<span></span>
			<p class="mid-w3ls"><i class="fa fa-ship" aria-hidden="true"></i></p>
			<span></span>
			<p><i class="fa fa-credit-card-alt" aria-hidden="true"></i></p>
			
			 <ul class="icons-text">
				<li>Kirim</li>
				<li>Diantar</li>
				<li>Diterima</li>
			 </ul>
			 </center>
		 </div>
			<h2>Kirim paket anda dengan aman mudah dan amanah ke Pondok Pesantren </h2>
			<div class="login-form">			
							<form action="<?php echo e(route('paket.store')); ?>" method="POST" enctype="multipart/form-data">
								<?php echo csrf_field(); ?>
								<input type="text"  name="nama_pengirim" placeholder="Nama Pengirim" required="" />
								<input type="text"  name="Number" placeholder="No Telepon" required="" />
								<input type="text"  name="instansi" placeholder="Instansi/Asal" required="" />
								<div class="left-w3-agile">
									<select name="tipe_barang" class="form-control">
										<option>Tipe Barang</option>
										<option value="buku">Buku</option>
										<option value="makanan">Makanan</option>
										<option value="obat">Obat</option>
										<option value="uang">Uang</option>
										<option value="pakaian">Pakaian</option>
										<option value="DLL">DLL</option>
									</select>	
								</div>
								<input type="text"  name="nama_penerima" placeholder="Nama Penerima" required="" />
								<input type="text"  name="Email" placeholder="Asal" required="" />
								<input type="submit" value="Simpan">
								<br/>
								<br/>
								<center>
								<a href="<?php echo e(url('/')); ?>" style=" color: white; float: right; font-size: 15px; border-bottom: solid 1px;">Back</a>
								</center>
							</form>
						</div>

	 <!--copyright-->
		<div class="copy w3ls">
		    <p style="font-family: monoscape; color: white;">© 2020 | Cyber R. A. Y. A.</p>
	    </div>
	<!--//copyright-->
	</div>
	</div>	
	</div>	

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/paket/form.blade.php ENDPATH**/ ?>