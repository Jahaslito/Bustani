<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                    
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">info@bustani.com</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Bustani</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/contact-us" class="nav-link">Contact</a></li>
          <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:#82ae46" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/seller/profile">Profile</a>
                                <?php if(Auth::user()->hasRole('seller')): ?>
                                    <a class='dropdown-item' href='/seller/products'>My Products</a>
                                <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>





                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
          
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
<?php /**PATH C:\Users\gudle\OneDrive\Desktop\web-applications\Bustani\resources\views/partials/nav.blade.php ENDPATH**/ ?>