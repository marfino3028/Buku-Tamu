<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Buku Tamu YBM PLN</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Forest Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
     <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bar.css')); ?>">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pignose.calender.css')); ?>" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style4.css')); ?>">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo e(asset('css/fontawesome-all.css')); ?>" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="<?php echo e(asset('css/hutan.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="<?php echo e(asset('css/hutan.font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="<?php echo e(asset('css/hutan.style.css')); ?>" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Playfair+Display:400,700')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet')); ?>">
  </head>
  <body>
    <div class="header-outs " id="header">
      <div class="header-w3layouts">
        <div class="container-fluid">
          <div id="logo">
              <img class="navbar-brand" width="10%" src="<?php echo e(asset('images/logo.png')); ?>" style="float:left;">
            </div>
          <nav>            
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-lg-3 mt-2">
              
              <li ><a href="#">Login</a></li>
              
            </ul>
            <div class="clearfix"></div>
          </nav>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //nav -->
      <!-- //header -->
      <div class="container">
        <div class="slide-info text-center">
          <div class="banner-top-grid">
          </div>
          <h5>Selamat Datang</h5>
          <div class="slide-info-txt">
            <p>Di pondok pesantren Tahfidz Preneur Tursina YBM PLN </p>
            <p>silahkan pilih tujuan anda!</p>
          </div>
          <div class="two-mid-button d-flex justify-content-center mt-lg-5 mt-md-4 mt-sm-4 mt-3">
            <div class="read-buttn ">
              <a href="<?php echo e(url('/sesi')); ?>" class=" scroll" >Berkunjung</a>
            </div>
            <div class="view-buttn">
              <a href="#contact" class=" scroll">Kirim Paket</a>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      
    </div>
    <!-- //banner -->
    <!-- Countdown -->
<div class="container-fluid">
            <div class="outer-w3-agile mt-3 outer-w3-agile-bg">
                <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
                <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
            </div>
        </div>
            <!--// Countdown -->
   <script src="<?php echo e(asset('js/simplyCountdown.js')); ?>"></script>
    <link href="<?php echo e(asset('css/simplyCountdown.css')); ?>" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src="<?php echo e(asset('js/amcharts.js')); ?>"></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- //Js for bootstrap working --><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/layouts/welcome.blade.php ENDPATH**/ ?>