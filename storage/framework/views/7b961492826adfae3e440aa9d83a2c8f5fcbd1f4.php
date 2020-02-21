<!-- top-bar -->
<nav class="navbar navbar-default mb-xl-5 mb-4"  id="topbar">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!-- Search-from -->
        
        <!--// Search-from -->
        <ul class="top-icons-agileits-w3layouts float-right">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu drop-3">
                <div class="profile d-flex mr-o">
                    <div class="profile-l align-self-center">
                         <?php if(!empty($users->foto)): ?>
                        <img src="<?php echo e(asset('images')); ?>/<?php echo e($users->foto); ?>" class="img-fluid mb-3">
                         <?php else: ?>
                          <img src="<?php echo e(asset('images/profile.png')); ?>" class="img-fluid mb-3">
                        <?php endif; ?>
                    </div>
                    <div class="profile-r align-self-center">
                    </div>
                </div>              
                <a href="#" class="dropdown-item mt-3">
                    <h4>
                        <i class="far fa-user mr-3"></i><?php echo e(Auth::user()->name); ?></h4>
                    </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="far fa-envelope mr-3"></i><?php echo e(Auth::user()->email); ?></h4>
                            </a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt "></i>
                                    <?php echo e(__('Logout')); ?>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                  <?php echo csrf_field(); ?>
                              </form>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
            <!--// top-bar --><?php /**PATH C:\xampp2\htdocs\bukutamu\bukutamu\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>