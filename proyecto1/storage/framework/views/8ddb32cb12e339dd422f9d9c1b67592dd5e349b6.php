<?php $__env->startSection('title', 'Pagina principal'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        <?php if(auth()->user()->is_admin == 1): ?>
            <div class=”panel-heading”>Bienvenido administrador tienes acceso al CRUD!</div>
        <?php else: ?>
            <div class=”panel-heading”>Bienvenido cliente, entre tus opciones está alquilar y devolver peliculas!</div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/home.blade.php ENDPATH**/ ?>