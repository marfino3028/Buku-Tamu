<?php $__env->startSection('content'); ?>
<?php

$ar_gender = ['L'=>'Mr.', 'P'=>'Mrs.'];


?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<form method="POST" action="<?php echo e(route('tamu.update',$edit->id)); ?>"
  enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Tamu</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" 
      value="<?php echo e($edit->nama); ?>" <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
      <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4" name="gender">Jenis Kelamin</label> 
    <div class="col-8">


      <div class="form-check form-check-inline"  <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <input class="form-check-input" type="radio" name="gender" 
        value="L"/>Laki-laki
        <input class="form-check-input" type="radio" name="gender" 
        value="P"/>Perempuan    
      </div>
       <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
      
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Instansi</label> 
    <div class="col-8">
      <input id="nama" name="instansi" type="text" class="form-control"  
      value="<?php echo e($edit->instansi); ?>" />
    </div>
  </div>
  <div class="form-group row"  <?php $__errorArgs = ['tanggal_datang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
    <label for="nama" class="col-4 col-form-label">Tanggal Datang</label> 
    <div class="col-8">
      <input id="nama" name="tanggal_datang" type="date" class="form-control"  
      value="<?php echo e($edit->tanggal_datang); ?>" />
       <?php $__errorArgs = ['tanggal_datang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
    </div>
  </div>
  
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="alamat" name="keperluan" cols="40" rows="5" class="form-control"><?php echo e($edit->keperluan); ?></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="hp" class="col-4 col-form-label">HP</label> 
    <div class="col-8">
      <input id="hp" name="no_telp" value="<?php echo e($edit->no_telp); ?>" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-4">Foto</label> 
    <div class="col-8">
      <input value="<?php echo e($edit->foto); ?>" name="foto" type="file" class="form-control-file">
      foto maksimal 2 Mb

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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/tamu/form_edit.blade.php ENDPATH**/ ?>