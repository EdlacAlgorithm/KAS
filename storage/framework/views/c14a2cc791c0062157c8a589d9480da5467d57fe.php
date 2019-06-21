<div class="category-tab" id="categoriseproducts"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<?php $__currentLoopData = $categoriseProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="<?php echo e($loop->first?'active':''); ?>">
					<a href="#<?php echo e($category->name); ?>" data-toggle="tab">
						<?php echo e($category->subName); ?>

					</a>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
	<div class="tab-content">
		<?php $__currentLoopData = $categoriseProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="tab-pane fade <?php echo e($loop->first?'active in':''); ?>" id="<?php echo e($category->name); ?>" >
				<?php $__currentLoopData = $category->shishas->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<?php 
										$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
									 ?>
									<img src="<?php echo e(asset('assets/images/'.$image)); ?>" alt="<?php echo e($product->name); ?>" width="">
									<h2>₦<?php echo e($product->price); ?></h2>
									<p><?php echo e($product->name); ?></p>
									<a  class="btn btn-default add-to-cart whatappbtn"
										href="javascript:whatsAppWith('<?php echo e(config('app.whatsapp_number')); ?>','<?php echo e($product->name); ?>')">
										<i class="fa fa-whatsapp"></i>WhatsApp
									</a>
									<a href="<?php echo e(config('app.call_number')); ?>" class="btn btn-default add-to-cart call">
										<i class="fa fa-phone"></i>Call
									</a>
								</div>
							</div>
							<div class="social-share text-center"></div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div><!--/category-tab-->