<?php $__env->startSection('content'); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="features_items" id="latestproducts"><!--features_items-->
						<h2 class="title text-center"><?php echo $__env->yieldContent('content_title'); ?></h2>
						<?php echo $__env->yieldContent('content_body'); ?>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>