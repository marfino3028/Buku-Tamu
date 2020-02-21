<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>">
    <title>Buku Tamu YBM PLN</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
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

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>
<body>
  <!-- Page Wrapper -->
  <div>
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div>
        <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div>
        <?php echo $__env->make('layouts.grapic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
       <div>
        <?php echo $__env->make('layouts.kalender', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
       <div>
      <!-- End of Main Content -->
      <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#topbar">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Required common Js -->
    <script src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

   

    <!-- profile-widget-dropdown js-->
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
   
    <link href="<?php echo e(asset('css/simplyCountdown.css')); ?>" rel='stylesheet' type='text/css' />
    <script>
        date_default_timezone_set("Asia/Bangkok");
        function date_time(id)
        {
            date = new Date;
            year = date.getFullYear();
            month = date.getMonth();
            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
            d = date.getDate();
            day = date.getDay();
            days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            h = date.getHours();
            if(h<10)
            {
                h = "0"+h;
            }
            m = date.getMinutes();
            if(m<10)
            {
                m = "0"+m;
            }
            s = date.getSeconds();
            if(s<10)
            {
                s = "0"+s;
            }
            result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("'+id+'");','1000');
            return true;
        }
    </script>

     <script type="text/javascript">window.onload = date_time('date_time');</script>

    <!--// Count-down -->

   
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
    <!-- //Js for bootstrap working -->

</body>

</html><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/layouts/home.blade.php ENDPATH**/ ?>