<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li data-target="#slider-carousel" 
								data-slide-to="<?php echo e($loop->index); ?>" 
								class="<?php echo e($loop->first?'active':''); ?>">
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ol>
					<div class="carousel-inner">
						<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item <?php echo e($loop->first?'active':''); ?>">
								<div class="col-sm-6">
									<h1><span>KAS</span>-<?php echo e($slider->title); ?></h1>
									<h2><?php echo e($slider->sub_title); ?></h2>
									<p><?php echo e($slider->description); ?>.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(asset('assets/images/home/'.$slider->image.'.jpg')); ?>" 
										class="girl img-responsive" alt="" />
									
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</div>
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/slider-->