<?php if($errors->any()): ?>
  <div class="status alert alert-danger">
  	! <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	    <?php echo e($error); ?> 
  	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>  
<?php endif; ?>
