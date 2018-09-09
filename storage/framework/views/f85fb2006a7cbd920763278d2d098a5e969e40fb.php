<?php $__env->startSection('content_title','Slider List'); ?>
<?php $__env->startSection('page_name','Slider'); ?>
<?php $__env->startSection('thead'); ?>
	<td class="image">Slider Image</td>
	<td class="description">Title</td>
	<td class="quantity">Status</td>
	<td>Actions</td>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tbody'); ?>
	<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td class="cart_product">
				<a href="#">
					<img src="<?php echo e(asset('assets/images/home/small_product'.rand(1,6).'.jpg')); ?>" alt="<?php echo e($slider->title); ?>">
				</a>
			</td>
			<td class="cart_description">
				<h4><a href="#"><?php echo e($slider->title); ?></a></h4>
				<p><?php echo e($slider->sub_title); ?></p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<a class="cart_quantity_up" href="#"> + </a>
					<input class="cart_quantity_input" type="text" 
						name="quantity" value="1" 
						autocomplete="off" size="2">
					<a class="cart_quantity_down" href="#"> + </a>
				</div>
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
	<?php echo e($sliders->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>