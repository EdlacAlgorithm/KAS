<?php $__env->startSection('content'); ?>
	<?php $__env->startSection('slider'); ?>
		
		<?php echo $__env->make('frontend._pertial.slidersearch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							<div class="shipping text-center "><!--shipping-->
								<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
							</div>
							<div class="shipping text-center "><!--shipping-->
								<img src="<?php echo e(asset('assets/images/kas/clear2.png')); ?>" alt="" />
							</div>
							<div class="shipping text-center "><!--shipping-->
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
<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('assets/js/jquery.backstretch.js')); ?>"></script>
	<script>
		var header_height = $('#header').height()

		/* parallax header */
		function parallax(){
			var scrolled = $(window).scrollTop()
			$('#header .backstretch img').css('top',''+-(scrolled*0.6)+'px')
			$('.heading').css('background-position', 'center '+-(scrolled*0.5)+'px')
		}


		/* backstretch slider */
		 $('.header-slide').backstretch([
				'<?php echo e(asset("assets/slide/hookahe1.jpg")); ?>',
				'<?php echo e(asset("assets/slide/hookahe2.jpg")); ?>',
				'<?php echo e(asset("assets/slide/hookahe3.jpg")); ?>',
				'<?php echo e(asset("assets/slide/hookahe5.jpg")); ?>',  
			],{
				fade: 850,
				duration: 4000
			 }
			);


		/* navbar */
		$(window).scroll(function(){
			parallax();
			if($(window).scrollTop() > header_height){
				//$('.navbar').css('border-bottom-color', '#3bafda');
			}else{
				//$('.navbar').css('border-bottom-color', '#fff');
			}
		});
	</script>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>