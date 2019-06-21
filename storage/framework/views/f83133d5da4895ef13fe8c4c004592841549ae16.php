<div class="features_items" id="latestproducts"><!--features_items-->
	<h2 class="title text-center">Our Latest products</h2>
	<?php $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<a href="/product/detail/<?php echo e($product->unique_id); ?>">
							<?php 
								$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
							 ?>
							<img src="<?php echo e(asset('assets/images/'.$image)); ?>" alt="<?php echo e($product->name); ?>" width="">
						</a>
						<h2>₦<?php echo e($product->price); ?></h2>
						<p><?php echo e($product->name); ?></p>
						<a  class="btn btn-default add-to-cart whatappbtn"
							href="javascript:whatsAppWith('<?php echo e(config('app.whatsapp_number')); ?>','<?php echo e($product->name); ?>')">
							<i class="fa fa-whatsapp"></i>WhatsApp
						</a>
						<a href="tel:<?php echo e(config('app.call_number')); ?>" class="btn btn-default add-to-cart call">
							<i class="fa fa-phone-square"></i>Call
						</a>
					</div>
				</div>
				<div class="social-share text-center"></div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!--features_items-->