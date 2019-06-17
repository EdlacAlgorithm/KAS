<?php $__env->startSection('content'); ?>
	<?php $__env->startSection('slider'); ?>
		<?php echo $__env->make('frontend._pertial.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">						
						<?php echo $__env->make('frontend._pertial.category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
						</div><!--/shipping-->
						<?php if(!strpos(request()->url(),'product/detail')): ?>
							<div class="shipping text-center"><!--shipping-->
								<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
							</div>
							<div class="shipping text-center"><!--shipping-->
								<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
							</div>
							<div class="shipping text-center"><!--shipping-->
								<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<?php $__env->startSection('body_content'); ?>
						<?php echo $__env->make('frontend._pertial.latest_products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo $__env->make('frontend._pertial.categorise_products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo $__env->make('frontend._pertial.testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo $__env->yieldSection(); ?>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>