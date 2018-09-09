<?php $__env->startSection('body'); ?>
	##parent-placeholder-02083f4579e08a612425c0c1a17ee47add783b94##
	<?php $__env->startSection('content'); ?>
		<div id="page-content" style="transform: translateY(0px);">

		    <?php echo $__env->make('frontend._pertial.category_listing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		    <!--end block-->

		    <?php echo $__env->make('frontend._pertial.latest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!--end block-->
		    <?php echo $__env->make('frontend._pertial.oldest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		    <!--end block-->
		</div>
   	<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>