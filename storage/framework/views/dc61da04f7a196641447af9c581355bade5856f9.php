<link rel="stylesheet" href="<?php echo e(asset('css/show.css')); ?>">
<link href="<?php echo e(asset('welcome/css/font-awesome.css')); ?>" rel="stylesheet"> 


<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ar_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="row">
  <section class="container">


    <!--Profile Card 3-->
    <div class="col-md-4">
      <div class="card profile-card-3">
        <div class="background-block">
          <img src="<?php echo e(asset('images/bgprofile.jpg')); ?>" alt="profile-sample1" class="background"/>
        </div>
        <div class="profile-thumb-block">
           <?php if(!empty($users->foto)): ?>   
          <img src="<?php echo e(asset('images')); ?>/<?php echo e($users->foto); ?>" alt="profile-image" class="profile"/>
           <?php else: ?>
           <img src="<?php echo e(asset('images/profile.png')); ?>" alt="profile-image" class="profile"/>
            <?php endif; ?>
          <!-- The Modal -->
          
        </div>
        <div class="card-content">
          <h2><?php echo e($users->name); ?><p><?php echo e($users->email); ?></p></h3>
            <h3>status: <?php echo e($users->role); ?></h3>
          </div>
        </div>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </section>
  </div>

  <br>
  <a href="<?php echo e(url('/auth')); ?>" 
  class="btn btn-info btn-lg">
Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/auth/show.blade.php ENDPATH**/ ?>