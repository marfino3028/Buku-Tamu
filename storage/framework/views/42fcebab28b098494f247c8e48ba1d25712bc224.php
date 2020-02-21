<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/show.css')); ?>">


<div class="card shadow mb-10">

    <?php $__currentLoopData = $ar_tamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
  <h5 class="m-0 font-weight-bold text-primary">Profile Tamu</h5>
    </div>
    <div class="card-body">
      <div class="text-center">
        <?php if(!empty($peng->foto)): ?>
            <img id="myImg" style="width:100%;max-width:300px"
                 src="<?php echo e(asset('images')); ?>/<?php echo e($peng->foto); ?>" />
        <?php else: ?>
            <img  style="width:100%;max-width:300px"
                 src="<?php echo e(asset('img/no-photo.jpg')); ?>" alt="">
        <?php endif; ?>
          <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
      </div>
      <br>
      <div class="alert alert-dismissable alert-primary">
         Nama              : <?php echo e($peng->nama); ?> <br/>
          Instansi / Alamat  : <?php echo e($peng->instansi); ?> <br/>
          No. HP            : <?php echo e($peng->no_telp); ?> <br/>
          Keperluan         : <?php echo e($peng->keperluan); ?> <br/>
      </div>
      
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  </div>
    <br>
      <div>
      <a rel="nofollow" href="<?php echo e(url('/tamu')); ?>" class="btn btn-info btn-lg">Kembali</a>
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
<?php $__env->stopSection(); ?>


<!-- class="img-fluid px-3 px-sm-4 mt-3 mb-4" -->
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/tamu/show.blade.php ENDPATH**/ ?>