<?php $__env->startSection('title', 'Contacto'); ?>
<?php $__env->startSection('content'); ?>
<h1 >Nosotros</h1>
<p>Mi nombre es <?php echo e($nombreenviado); ?></p>
<?php if($nombreenviado=='Julio'): ?>
<p>Hola Julio</p>
<?php else: ?>
<p> Hola desconocido</p>
<?php endif; ?>
<?php for($i = 0; $i < 10; $i++): ?>
The current value is <?php echo e($i); ?></br>
<?php endfor; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/nosotros.blade.php ENDPATH**/ ?>