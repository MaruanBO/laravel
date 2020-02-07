 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    <?php if(auth()->user()->is_admin == 1): ?>
                    <a href="<?php echo e(url('catalog/admin')); ?>">Admin</a>
                    <?php else: ?>
                    <div class=”panel-heading”>Normal User</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/admin.blade.php ENDPATH**/ ?>