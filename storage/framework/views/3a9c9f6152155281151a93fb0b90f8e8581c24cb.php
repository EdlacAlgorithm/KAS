<?php if(session()->has('flash') || session()->has('warning')): ?>
    <div class="alert alert-<?php echo e(session('warning')?'warning':'success'); ?> alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong><?php echo e(session('warning')?'!!! Warning':$sucess); ?> </strong>  <?php echo e(session('warning')?:$message); ?>

    </div>
<?php endif; ?>



<?php if($errors->any()): ?>
    <article class="byMsg byMsgError" style="margin-bottom: 40px;" id="formErrors">
        ! <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($error); ?> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </article>
<?php endif; ?>