<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
    <?php $__currentLoopData = $ar_paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e($paket->nama_pengirim); ?></h6>
    </div>
    <div class="card-body">
    
      <div class="alert alert-dismissable alert-primary">
          Nama: <?php echo e($paket->nama_pengirim); ?> <br/>
          Instansi : <?php echo e($paket->instansi); ?> <br/>
          Tipe Barang : <?php echo e($paket->tipe_barang); ?> <br/>
          Nama Penerima : <?php echo e($paket->nama_penerima); ?> <br/>
          
         
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/paket')); ?>" 
       class="btn btn-info btn-lg">
        Kembali</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/paket/show.blade.php ENDPATH**/ ?>