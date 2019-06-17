

<?php if(session()->has('success') || session()->has('warning')): ?>
    <div class="alert alert-<?php echo e(session('warning')?'warning':'success'); ?> alert-dismissible text-center" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        <?php echo e(session('warning')?:session('success')); ?>

    </div>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger text-center" alert-dismissible role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
    </div>
<?php endif; ?>
