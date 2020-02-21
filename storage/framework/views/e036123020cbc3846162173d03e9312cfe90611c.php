<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama Pengirim',
             'Instansi / Asal','Tipe barang','Nama penerima','Action'];
$no = 1;    
?> 
<!-------awal modal tambah data---------->
<!-- Button trigger modal -->

<!-------akhir modal tambah data---------->
<a href="<?php echo e(url('export')); ?>" 
  class="btn btn-warning btn-md">
 <i class="fas fa-file-excel"></i>&nbsp;Data Pegawai
</a>&nbsp;&nbsp;

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <th><?php echo e($jdl); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          </thead>
          <tbody>
             <?php $__currentLoopData = $ar_paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($paket->nama_pengirim); ?></td>
                <td><?php echo e($paket->instansi); ?></td>
                <td><?php echo e($paket->tipe_barang); ?></td>
                <td><?php echo e($paket->nama_penerima); ?></td>
                <td>
                   <form method="POST" 
                  action="<?php echo e(route('paket.destroy',$paket->idpaket)); ?>">

                  <a href="<?php echo e(route('paket.show',$paket->idpaket)); ?>" 
                     class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>&nbsp;&nbsp; 
                  <a href="<?php echo e(route('paket.edit',$paket->idpaket)); ?>" 
                      class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>&nbsp;&nbsp;  
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" 
                    class="btn btn-danger btn-circle btn-sm" 
                    onclick="return confirm('anda yakin ingin menghapus?')">
                    <i class="fas fa-trash"></i>
                    </button>
                  </form>  
                </td>
               
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
          </tbody>    
          
        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/paket/index.blade.php ENDPATH**/ ?>