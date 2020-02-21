<div class="se-pre-con"></div>
    <div class="wrapper">
<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <center><a href="index.html"><img src="<?php echo e(asset('images/LGN.png')); ?>" width="100%" style="position: relative; top: 18px;"></a></center>
                </h1>
                <span>
               <img src="<?php echo e(asset('images/logobt.png')); ?>" width="100%" style="position: relative; top: 18px;">
            </span>
            </div>
            <br/>
            <hr/>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="<?php echo e(url('/home')); ?>">
                        <i class="fas fa-th-large"></i>
                       Dasboard
                    </a>
                </li>
                <hr>
                <p>Data</p>
                <hr>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Master Data
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo e(url('/tamu')); ?>">
                            <i class="fas fa-database"></i>
                            Data Kunjungan</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/paket')); ?>">
                            <i class="fas fa-database"></i>
                            Data Paket</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(url('/chart')); ?>">
                        <i class="fas fa-chart-pie"></i>
                        Charts
                    </a>
                </li>
               
                <hr>
                <p>Print Data</p>
                <hr>
                <li>
                    <a href="#cetak" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-print"></i>
                        Cetak Data
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="cetak">
                        <li>
                            <a href="<?php echo e(url('tamu-pdf')); ?>">
                            <i class="fas fa-print"></i>
                            Cetak Data Kunjungan</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo e(url('paket-pdf')); ?>">
                            <i class="fas fa-print"></i>
                            Cetak Data Paket</a>
                        </li>
                    </ul>
                </li>
                <hr>
                <p>Manage Account</p>
                <hr>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Users
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                      
                        <li>
                            <a href="<?php echo e(url('/auth')); ?>">
                            <i class="fas fa-user-plus"></i>
                            kelola users</a>
                        </li>
                        
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt "></i>
                            <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                             <?php echo csrf_field(); ?>
                         </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!-- Page Content Holder -->
        <div id="content"><?php /**PATH C:\xampp2\htdocs\bukutamu\bukutamu\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>