<?php $__env->startSection('content'); ?>
<div class="row">
<?php $__currentLoopData = $pelicula; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peliculas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-xs-6 col-sm-4 col-md-3 text-center">	
		<img src="<?php echo e($pelicula->poster); ?>" style="height:200px"/>
		<h4 style="min-height:45px;margin:5px 0 10px 0">
		<?php echo e($peliculas->title); ?>

		</h4>
		</a>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/maruan/Documentos/maruan_laravel/Homestead/codigo/proyecto1/resources/views/catalog/index.blade.php ENDPATH**/ ?>