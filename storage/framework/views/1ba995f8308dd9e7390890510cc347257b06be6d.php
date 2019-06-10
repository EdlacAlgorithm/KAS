<?php $__env->startSection('content_title','Category List'); ?>
<?php $__env->startSection('page_style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_row_background.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_name','Category'); ?>
<?php $__env->startSection('thead'); ?>
	<td class="quantity">SN</td>
	<td class="total">Title</td>
	<td class="quantity">Product Count</td>
	<td>Action</td>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tbody'); ?>
	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<?php echo e($loop->index + 1); ?>

				</div>
			</td>
			<td class="cart_total">
				<p class="cart_total_pric">
					<?php echo e($category->name); ?>

				</p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<a class="cart_quantity_up" href="#"> + </a>
					<input class="cart_quantity_input" type="text" 
						name="quantity" value="<?php echo e($category->shishas_count); ?>" 
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

<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>