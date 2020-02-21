
  <head>
    <meta charset="utf-8">
    <link href="<?php echo e(asset('css/galerystyle.css')); ?>" rel="stylesheet">
  </head>

  <!-- header -->
  <body>
    <!-- The grid: four columns -->
    <div class="bg-agile">
<div class="row">
  <div class="column">
    <img src="<?php echo e(asset('images/a.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/c.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/d.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/e.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/f.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/g.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/h.jpg')); ?>"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="<?php echo e(asset('images/i.jpg')); ?>"  onclick="myFunction(this);">
  </div>
</div>
</div>

<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>
 


    </body>
    <script src="<?php echo e(asset('js/galeri.js')); ?>"></script>

<?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/layouts/galeri.blade.php ENDPATH**/ ?>