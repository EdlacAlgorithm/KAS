<?php $__env->startSection('content_title','Testimonial List'); ?>
<?php $__env->startSection('page_style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_row_background.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('add_link','#modalComponet'); ?>
<?php $__env->startSection('modal'); ?>
	data-toggle="modal" data-action="Create"
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
				<a class="cart_quantity_delete" href="#modalComponet" data-toggle="modal"
					data-action="Edit"  data-content="<?php echo e($testimonial->toJson()); ?>"
					style="background: #5bc0de;">
					<i class="fa fa-edit" ></i>
				</a>
				<a class="cart_quantity_delete" href="#" 
					onclick="deleteItem('testimonial',<?php echo e($testimonial->id); ?>)" 
					style="background: #d9534f">
					<i class="fa fa-trash" ></i>
				</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal_component'); ?>
	<?php $__env->startComponent('components.modal'); ?>
		<?php $__env->slot('modalTitle','Create Testimonial'); ?>
		<?php $__env->slot('modalFormAction','/testimonial'); ?>
		<?php $__env->slot('modalBody'); ?>
			<label for="recipient-name" class="control-label"> Name:</label>
			<input type="text" class="form-control" id="name" name="name" required>
			<label for="recipient-name" class="control-label"> Profile:</label>
			<input type="text" class="form-control" id="profile" name="profile"/>
			<div class="file-upload-previews">
				<div class="MultiFile-label">
					<a class="MultiFile-remove" href="#" id="removeAdImg" 
						data-item-id="$product->id" 
						data-img-name="$product->image">x</a> 
					<span>
						<span class="MultiFile-label" 
							title="File selected: $product->image.jpg">
							<span class="MultiFile-title">Image</span>
							<img class="MultiFile-preview" 
								style="max-height:100px;product max-width:100px;" 
								src="img.jpg">
						</span>
					</span>
					<input type="hidden" name="previousImage" value="" />
				</div>
			</div>
			<div class="file-upload">
				<input type="file" name="image" 
				class="file-upload-input with-preview"  
				title="Click to add files" 
				maxlength="1" accept="jpg|png" 
				onchange="checkFile(this)" id="img">
				<span style="color:#000">CLICK OR DRAG IMAGE HERE</span>
				<input type="hidden" id="imgCount" value="1"/>
			</div>
		<?php $__env->endSlot(); ?>
	<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_script'); ?>
	<script src="<?php echo e(asset('assets/js/testimonial.modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>