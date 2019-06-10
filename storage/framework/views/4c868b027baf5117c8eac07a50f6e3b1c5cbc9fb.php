<?php $__env->startSection('body'); ?>
	<div id="page-content" style="transform: translateY(0px);">

        <?php echo $__env->make('frontend._pertial.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

       
        <!--end block-->
   	</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>