<div class="recommended_items" id="testimonials"><!--recommended_items-->
	<h2 class="title text-center">View Of Our Certisfied Clients</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php $__currentLoopData = $testimonials->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonialChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item <?php echo e($loop->first?'active':''); ?>">
					<?php $__currentLoopData = $testimonialChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<?php 
											$avater = $testimonial->avater?'testimonials/similar_'.$testimonial->avater:'no_image.jpg';
										  ?>
										 <img src="<?php echo e(asset('assets/images/'.$avater)); ?>" alt="<?php echo e($testimonial->name); ?>" width="">
										<h5><?php echo e($testimonial->name); ?></h5>
										<p><?php echo e($testimonial->profile); ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		 <a class="left recommended-item-control" 
		 	href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" 
		  		href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
		  </a>			
	</div>
</div><!--/recommended_items-->