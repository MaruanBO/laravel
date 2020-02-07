<?php $__env->startSection('title', 'Vista detallada'); ?>
<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
	<div class="col-sm-4">
		<img src="<?php echo e($id->poster); ?>" class="img-thumbnail"/>
	</div>
	<div class="col-sm-8">
		<h3><?php echo e($id->title); ?></h3>
		<p class="text-justify">Año: <?php echo e($id->year); ?></p>
		<p class="text-justify">Director: <?php echo e($id->director); ?></p>
		<span class="text-justify font-weight-bold">Sinpsis: </span> <span><?php echo e($id->synopsis); ?></span>	
			<?php if(auth()->user()->is_admin == 0): ?>	
				<?php if($id->rented == true): ?>
				    <br><br><span class="font-weight-bold">Estado:</span> Pelicula alquilada
				    <br><br>
				    <form method="POST" action="<?php echo e(route('catalog.return',$id->id)); ?>" method="POST" style="display:inline">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?> 
						<button type="submit" class="btn btn-warning" style="display:inline">
						<i class="fa fa-retweet" aria-hidden="true"> Devolver pelicula</i>
						</button>
					</form>
				<?php else: ?>
				    <br><br><span class="font-weight-bold">Estado:</span> Pelicula disponible
				    <br><br>
				    <form action="<?php echo e(route('catalog.rent',$id->id)); ?>" method="POST" style="display:inline">
					    <?php echo csrf_field(); ?>
					    <?php echo method_field('PUT'); ?>
					    <button class="btn btn-success" type="submit" style="display:inline">
					    <i class="fa fa-get-pocket" aria-hidden="true"> Alquilar</i>
						</button>
					</form>
				<?php endif; ?>
			<?php endif; ?>	
		<br><br>

		<?php if(auth()->user()->is_admin == 1): ?>
		<a class="btn btn-warning" href="<?php echo e(url('/catalog/edit/'.$id->id)); ?>" role="button"><i class="fa fa-pencil" aria-hidden="true"> Editar pelicula</i></a>
		<form action="<?php echo e(route('catalog.delete',$id->id)); ?>" method="POST" style="display:inline">
		    <?php echo csrf_field(); ?>
		    <?php echo method_field('delete'); ?>
		    <button class="btn btn-danger" type="submit" style="display:inline">
		    <i class="fa fa-trash" aria-hidden="true"> Borrar pelicula</i>
			</button>
		</form>
		<?php endif; ?>
		<a class="btn btn-info" href="<?php echo e(url('/catalog')); ?>" role="button"><i class="fa fa-arrow-left" aria-hidden="true"> Volver al listado</i></a>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/catalog/show.blade.php ENDPATH**/ ?>