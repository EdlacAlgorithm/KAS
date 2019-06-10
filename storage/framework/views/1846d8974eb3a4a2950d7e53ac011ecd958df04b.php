<?php $__env->startSection('content_title','Category List'); ?>
<?php $__env->startSection('page_style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_row_background.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('add_link','#modalComponet'); ?>
<?php $__env->startSection('modal'); ?>
	data-toggle="modal" data-action="Create"
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
					<?php echo e($loop->iteration); ?>

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
				<a class="cart_quantity_delete" href="#modalComponet" 
					data-toggle="modal" data-action="Edit"
					data-content="<?php echo e($category->toJson()); ?>"
					style="background: #5bc0de;">
					<i class="fa fa-edit"></i>
				</a>
				<a class="cart_quantity_delete" href="#"
					onclick="deleteItem('category',<?php echo e($category->id); ?>)" 
					style="background: #d9534f">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal_component'); ?>
	<?php $__env->startComponent('components.modal'); ?>
		<?php $__env->slot('modalTitle','Create Category'); ?>
		<?php $__env->slot('modalFormAction','/category'); ?>
		<?php $__env->slot('modalBody'); ?>
			<label for="recipient-name" class="control-label">Category Name:</label>
			<input type="text" class="form-control" id="name" name="name">
		<?php $__env->endSlot(); ?>
	<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_script'); ?>
	<script src="<?php echo e(asset('assets/js/category.modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>