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
<form method="POST" action="<?php echo e(route('paket.update',$edit->idpaket)); ?>"
  enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
   
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengirim</label> 
    <div class="col-8">
      <input id="nama" name="nama_pengirim" type="text" class="form-control" 
             value="<?php echo e($edit->nama_pengirim); ?>" />
      
    </div>
  </div>
 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Instansi</label> 
    <div class="col-8">
      <input id="nama" name="instansi" type="text" class="form-control"  
             value="<?php echo e($edit->instansi); ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tipe Barang</label> 
    <div class="col-8">
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
  </div>
   <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Penerima</label> 
    <div class="col-8">
      <input id="nama" name="nama_penerima" type="text" class="form-control" 
             value="<?php echo e($edit->nama_penerima); ?>" />
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/paket/form_edit.blade.php ENDPATH**/ ?>