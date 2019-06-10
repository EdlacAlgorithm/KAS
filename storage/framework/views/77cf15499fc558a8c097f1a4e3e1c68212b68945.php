 
<?php $__env->startSection('content_title','Slider List'); ?>
<?php $__env->startSection('page_style'); ?>
	<link href="<?php echo e(asset('assets/css/bootstrap-switch.css')); ?>" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_row_background.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('add_link','#modalComponet'); ?>
<?php $__env->startSection('modal'); ?>
	data-toggle="modal" data-action="Create"
<?php $__env->stopSection(); ?>
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
					<img src="<?php echo e(asset('assets/images/home/small_product'.rand(1,6).'.jpg')); ?>" 
						alt="<?php echo e($slider->title); ?>">
				</a>
			</td>
			<td class="cart_description">
				<h4><?php echo e($slider->title); ?></h4>
				<p><?php echo e($slider->sub_title); ?></p>
			</td>
			<td class="cart_quantity">
				<input type="checkbox" name="slide_<?php echo e($slider->id); ?>" 
					<?php echo e($slider->status == 1?"checked":""); ?> onchange="toggle(<?php echo e($slider->id); ?>)" class="switches" />
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href="#modalComponet" data-toggle="modal"
					data-action="Edit" data-content="<?php echo e($slider->toJson()); ?>"
					style="background: #5bc0de;">
					<i class="fa fa-edit" ></i>
				</a>
				<a class="cart_quantity_delete" href="#" 
					onclick="deleteItem('slider',<?php echo e($slider->id); ?>)"
					style="background: #d9534f">
					<i class="fa fa-trash" ></i>
				</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>
	<?php echo e($sliders->links()); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal_component'); ?>
	<?php $__env->startComponent('components.modal'); ?>
		<?php $__env->slot('modalTitle','Create Slider'); ?>
		<?php $__env->slot('modalFormAction','/slider'); ?>
		<?php $__env->slot('modalBody'); ?>
			<label for="recipient-name" class="control-label"> Title:</label>
			<input type="text" class="form-control" id="name" name="title" required>
			<label for="sub_title" class="control-label"> Sub Title:</label>
			<input type="text" class="form-control" id="profile" name="sub_title"/>
			<label for="description" class="control-label"> Description:</label>
			<input type="text" class="form-control" id="profile" name="description"/>
			<div class="file-upload-previews">
				<div class="MultiFile-label">
					<a class="MultiFile-remove" href="#" id="removeAdImg">x</a> 
					<span>
						<span class="MultiFile-label" 
							title="File selected: image.jpg">
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
				<input type="file" name="image" class="file-upload-input with-preview"  
					title="Click to add files" maxlength="1" accept="jpg|png" 
					onchange="checkFile(this)" id="img">
				<span style="color:#000">CLICK OR DRAG IMAGE HERE</span>
			</div>
		<?php $__env->endSlot(); ?>
	<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_script'); ?>
	<script type='text/javascript' src='<?php echo e(asset("assets/js/bootstrap-switch.js")); ?>'></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/js/slider_switching.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/slider.modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>