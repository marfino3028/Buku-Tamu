<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form method="POST" action="<?php echo e(route('auth.update',$edit->id)); ?>"
  enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
   
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengirim</label> 
    <div class="col-8">
      <input id="nama" name="name" type="text" class="form-control" 
             value="<?php echo e($edit->name); ?>" />
      
    </div>
  </div>
 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="nama" name="email" type="text" class="form-control"  
             value="<?php echo e($edit->email); ?>" />
    </div>
  </div>
  
   <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Ubah Password</label> 
    <div class="col-8">
      <input id="nama" name="password" type="text" class="form-control" 
             value="<?php echo e($edit->password); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="file" class="form-control" 
             value="" />
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">  
      <button name="proses" type="submit" class="btn btn-warning" 
      value="ubah">Ubah</button>
    </div>
  </div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/auth/form_edit.blade.php ENDPATH**/ ?>