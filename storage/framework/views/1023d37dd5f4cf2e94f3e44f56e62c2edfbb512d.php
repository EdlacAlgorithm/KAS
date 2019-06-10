<div class="alert alert-<?php echo $__env->yieldContent('alert'); ?>">
    <div class="alert-title"><?php echo e($title); ?></div>
    <?php echo e($slot); ?>

    <?php echo $__env->yieldContent('content'); ?>
</div>