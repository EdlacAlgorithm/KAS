<?php $__env->startSection('content'); ?>
	<section id="advertisement">
		<div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="mainmenu">
                        <form class="form-inline" action="/product/listing" method="get">
                            <div class="price-rang form-group"><!--price-range-->
                                <?php  
                                    $prices = '[1500,2500]';
                                    if(request('price')){
                                        $prices = explode(',',request('price'));
                                        $prices = '['.$prices[0].','.$prices[1].']';
                                    }
                                 ?>
                                <div class="wel text-center" style="padding-right:10px">
                                    <input type="text" class="span2" value="" name="price" 
                                    data-slider-min="1000" data-slider-max="5000" 
                                    data-slider-step="500" data-slider-value="<?php echo e($prices); ?>" id="sl2"><br/>
                                    <b class="pull-left">₦1000</b> <b class="pull-right">₦5000</b>
                                </div>
                            </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" 
                                placeholder="What ?" value="<?php echo e(request('search')); ?>">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category">
                                <option value="0">All</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" 
                                        <?php echo e(request('category') == $category->id?'selected':''); ?>>
                                        <?php echo e($category->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <button type="submit" class="bt btn-info" 
                                style="height: 35px;border-radius:5%;">
                                    Search
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
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
												<?php 
													$image = $product->image?'products/list_'.$product->image:'no_image.jpg';
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
					<?php echo e($listingProducts->links()); ?>

				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>