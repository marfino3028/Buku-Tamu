<?php $__env->startSection('content'); ?>
<?php
$ar_judul = ['No','Nama','Gender',
             'Instansi / Asal','No. Telp','Keperluan','Tanggal Datang','Action'];
$no = 1;    
$users = DB::table('tamu')->count();


?> 
<!-------awal modal tambah data---------->

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kunjungan Tamu</h6>
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
             <?php $__currentLoopData = $ar_tamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tamu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($tamu->nama); ?></td>
                <td><?php echo e($tamu->gender); ?></td>
                <td><?php echo e($tamu->instansi); ?></td>
                <td><?php echo e($tamu->no_telp); ?></td>
                <td><?php echo e($tamu->keperluan); ?></td>
                <td><?php echo e($tamu->tanggal_datang); ?></td>
                <td>
                  <form method="POST" 
                  action="<?php echo e(route('tamu.destroy',$tamu->id)); ?>">

                  <a href="<?php echo e(route('tamu.show',$tamu->id)); ?>" 
                     class="btn btn-primary btn-circle btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>&nbsp;&nbsp; 
                  <a href="<?php echo e(route('tamu.edit',$tamu->id)); ?>" 
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/tamu/index.blade.php ENDPATH**/ ?>