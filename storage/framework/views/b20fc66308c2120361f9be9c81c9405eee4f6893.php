<?php $__env->startSection('slider',''); ?>
<?php $__env->startSection('body_content'); ?>
	<?php  $latestProducts = [];  ?>
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				
				<img src="<?php echo e(asset('assets/images/home/'.$product->image.'.jpg')); ?>" 
					 alt="<?php echo e($product->name); ?>" />
				<h3>ZOOM</h3>
			</div>
			<div id="similar-product" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				    	<?php $__currentLoopData = $product->similar->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similarChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item <?php echo e($loop->first?'active':''); ?>">
								<?php $__currentLoopData = $similarChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							  		<a href="/product/<?php echo e($similar->unique_id); ?>">
							  			<img src="<?php echo e(asset('assets/images/home/small_'.$similar->image.'.jpg')); ?>" 
							  				 alt="<?php echo e($similar->name); ?>">
							  		</a>
							  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				  <!-- Controls -->
				  <a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				  </a>
				  <a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				  </a>
			</div>
		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<h2><?php echo e($product->name); ?></h2>
				<p>Web ID: 1089772</p>
				<span>
					<span>₦<?php echo e($product->price); ?></span>
					<a class="btn btn-default add-to-cart whatappbtn"
						href="javascript:whatsAppWith('08108012345')">
						<i class="fa fa-whatsapp"></i>WhatsApp
					</a>
					<a href="#" class="btn btn-default add-to-cart">
						<i class="fa fa-phone-square"></i>Call
					</a>
				</span>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b> New</p>
				<p><b>Category:</b> <?php echo e($product->category->name); ?></p>
				<div class="social-share text-cente"></div>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->
	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li><a href="#details" data-toggle="tab">Similar Products</a></li>
				<li class="active"><a href="#reviews" data-toggle="tab">Detail & Review</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade" id="details" >
				<?php $__currentLoopData = $product->similar->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similarPro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo e(asset('assets/images/home/'.$similarPro->image.'.jpg')); ?>" alt="<?php echo e($similarPro->name); ?>" />
									<h2>₦<?php echo e($similarPro->price); ?></h2>
									<p><?php echo e($similarPro->name); ?></p>
									<a  class="btn btn-default add-to-cart whatappbtn"
										href="javascript:whatsAppWith('08108012345')">
										<i class="fa fa-whatsapp"></i>WhatsApp
									</a>
									<a href="#" class="btn btn-default add-to-cart">
										<i class="fa fa-phone"></i>Call
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="tab-pane fade active in" id="reviews" >
				<div class="col-sm-12">
					<ul>
						<li><a href=""><i class="fa fa-th-large"></i> <?php echo e($product->name); ?></a></li>
					</ul>
					<p><?php echo e($product->description); ?></p>
					<p><b>Write Your Review</b></p>	
					<form action="#">
						<span>
							<input type="text" placeholder="Your Name"/>
							<input type="email" placeholder="Email Address"/>
						</span>
						<textarea name="message" ></textarea>
						
						<button type="button" class="btn btn-default pull-right">
							Submit
						</button>
					</form>
				</div>
			</div>
		</div>
	</div><!--/category-tab-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>