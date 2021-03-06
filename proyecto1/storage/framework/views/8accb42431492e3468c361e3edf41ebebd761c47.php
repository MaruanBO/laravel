<?php $__env->startSection('title', 'Editar pelicula'); ?>
<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar película
         </div>
         <div class="card-body" style="padding:30px">
         	<?php if(auth()->user()->is_admin == 1): ?>
			 <form method="POST">
			    <?php echo csrf_field(); ?>
			    <?php echo method_field('PUT'); ?> 
	            <div class="form-group">
	               <label for="title">Título</label>
	               <input type="text" name="title" id="title" value="<?php echo e($id->title); ?>" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="year">Año</label>
	               <input id="year" name="year" type="text" value="<?php echo e($id->year); ?>" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="director">Director</label>
	               <input id="director" name="director" type="text" value="<?php echo e($id->director); ?>" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="image">Imagen</label>
	               <input id="poster" name="poster" type="text" value="<?php echo e($id->poster); ?>" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="synopsis">Resumen</label>
	               <textarea name="synopsis" name="synopsis" id="synopsis" class="form-control" rows="3"><?php echo e($id->synopsis); ?></textarea>
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Modificar película
	               </button>
	            </div>
            </form>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/catalog/edit.blade.php ENDPATH**/ ?>