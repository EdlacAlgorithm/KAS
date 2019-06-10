<?php $__env->startSection('content_title','Testimonial List'); ?>
<?php $__env->startSection('page_style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_row_background.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_name','Testimonial'); ?>
<?php $__env->startSection('thead'); ?>
	<td class="image">Testimonial Image</td>
	<td class="description">Name & Profile</td>
	<td>Actions</td>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tbody'); ?>
	<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td class="cart_product">
				<a href="#">
					<img src="<?php echo e(asset('assets/images/home/small_product'.rand(1,6).'.jpg')); ?>" 
					alt="<?php echo e($testimonial->name); ?>" class="img-circle">
				</a>
			</td>
			<td class="cart_description">
				<h4><a href="#"><?php echo e($testimonial->name); ?></a></h4>
				<p><?php echo e($testimonial->profile); ?></p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href=""
					style="background: #5bc0de;">
					<i class="fa fa-edit" ></i>
				</a>
				<a class="cart_quantity_delete" href="" 
					style="background: #d9534f">
					<i class="fa fa-times" ></i>
				</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>
	<?php echo e($testimonials->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>