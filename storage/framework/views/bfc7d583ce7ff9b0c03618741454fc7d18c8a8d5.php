<h3 align="center">Data Kiriman Paket Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      <?php
        $ar_judul = ['No','Nama Pengirim','Instansi',
                     'Tipe Barang','Nama Penerima'];
        $no = 1;    
      ?>     
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
          
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </tbody>    
    
  </table><?php /**PATH C:\xampp2\htdocs\bukutamu\resources\views/paket/paketPDF.blade.php ENDPATH**/ ?>