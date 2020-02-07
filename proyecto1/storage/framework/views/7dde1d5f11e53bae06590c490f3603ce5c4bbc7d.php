<?php $__env->startSection('title', 'Añadir pelicula'); ?>
<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
      	<?php if(auth()->user()->is_admin == 1): ?>
         <div class="card-header text-center">
            Añadir película
         </div>
         <div class="card-body">
		    <?php if($errors->any()): ?>
		      <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		              <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		      </div><br />
		    <?php endif; ?>
         <div class="card-body" style="padding:30px">
			 <form method="post" action="<?php echo e(route('catalog.create')); ?>" >
			    <?php echo csrf_field(); ?>
	            <div class="form-group">
	               <label for="title">Título</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="year">Año</label>
	            	<input id="year" name="year" type="text" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="director">Director</label>
	            	<input id="director" name="director" type="text" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="poster">Imagen</label>
	            	<input id="poster" name="poster" type="text" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="synopsis">Resumen</label>
	               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Añadir película
	               </button>
	            </div>
            </form>
         </div>
      </div>
   </div>
   <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/proyecto1/resources/views/catalog/create.blade.php ENDPATH**/ ?>