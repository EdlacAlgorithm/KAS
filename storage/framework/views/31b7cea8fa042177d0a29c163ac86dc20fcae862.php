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