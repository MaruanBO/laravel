<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt"></span> <i class="fa fa-video-camera" aria-hidden="true"> Videoclub</i></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto">
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
        <div class="dropdown">
          <button style="color:#777" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lenguage
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a style="color:#777" class="dropdown-item" href="<?php echo e(url('lang/en')); ?>">EN</a>
                <a style="color:#777" class="dropdown-item" href="<?php echo e(url('lang/es')); ?>">ES</a>
          </div>
        </div>
            <?php endif; ?>
        </ul>



        <?php if(Auth::check()): ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo e(Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/catalog')); ?>">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            <i class="fa fa-film" aria-hidden="true"> Catálogo</i>
                        </a>
                    </li>
                    <?php if(auth()->user()->is_admin == 1): ?>
                    
                        <li class="nav-item <?php echo e(Request::is('catalog/create') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/catalog/create')); ?>">
                                <i class="fa fa-plus" aria-hidden="true"> Nueva película</i>
                            </a>
                        </li>
                        <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus" aria-hidden="true"> <?php echo e(__('Register')); ?></i></a>
                        </li>
                        <?php endif; ?>
                    
                    <?php endif; ?>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user" aria-hidden="true"> <?php echo e(Auth::user()->name); ?></i><span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                               <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH /home/vagrant/code/proyecto1/resources/views/partials/navbar.blade.php ENDPATH**/ ?>