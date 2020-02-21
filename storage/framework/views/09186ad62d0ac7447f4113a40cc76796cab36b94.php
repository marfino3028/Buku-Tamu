<h3 align="center">Data Tamu Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      <?php
        $ar_judul = ['No','Nama','Gender','Instansi',
                     'No Telp','Keperluan','Tanggal datang'];
        $no = 1;    
      ?>     
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
          
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </tbody>    
    
  </table><?php /**PATH C:\xampp\htdocs\bukutamu\resources\views/tamu/tamuPDF.blade.php ENDPATH**/ ?>