<?php $__env->startSection('content'); ?>
	<section id="advertisement">
		<div class="container">
			<img src="<?php echo e(asset('assets/images/shop/advertisement.jpg')); ?>" alt="" />
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="features_items" id="latestproducts"><!--features_items-->
						<h2 class="title text-center">Product Listing</h2>
						<?php $__currentLoopData = $listingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="/product/detail/<?php echo e($product->unique_id); ?>">
												<img src="<?php echo e(asset('assets/images/home/'.$product->image.'.jpg')); ?>" 
													alt="<?php echo e($product->name); ?>" />
											</a>
											<h2>₦<?php echo e($product->price); ?></h2>
											<p><?php echo e($product->name); ?></p>
											<a  class="btn btn-default add-to-cart whatappbtn"
												href="javascript:whatsAppWith('08108012345')">
												<i class="fa fa-whatsapp"></i>WhatsApp
											</a>
											<a href="#" class="btn btn-default add-to-cart">
												<i class="fa fa-phone-square"></i>Call
											</a>
										</div>
										
										
									</div>
									<div class="social-share text-center"></div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!--features_items-->
					<?php echo e($listingProducts->links()); ?>

				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>