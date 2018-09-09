
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>KAS SHISA ZONE</title>
		<?php echo $__env->make('frontend._pertial.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('style'); ?>
	</head>
	<body>
		<div id="app">
			<?php $__env->startSection('body'); ?>
				<?php echo $__env->make('frontend._pertial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php echo $__env->yieldContent('content'); ?>
				<?php echo $__env->make('frontend._pertial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldSection(); ?>
		</div>
		<?php echo $__env->yieldContent('modal_component'); ?>
		<?php echo $__env->make('frontend._pertial.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('script'); ?>
	</body>
</html>