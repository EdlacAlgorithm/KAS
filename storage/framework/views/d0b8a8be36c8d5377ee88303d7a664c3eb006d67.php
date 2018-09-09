<?php $__env->startSection('body'); ?>
    <?php $__env->startComponent('componets.test',['ok'=>'ok test']); ?>
        <?php $__env->startSection('alert','success'); ?>
        <?php $__env->slot('title'); ?>
            Forbidden
        <?php $__env->endSlot(); ?>

        You are not allowed to access this resource!
        <?php $__env->startSection('content'); ?>
            Here is the component content
        <?php $__env->stopSection(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>