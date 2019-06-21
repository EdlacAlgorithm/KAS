<?php $__env->startSection('content_title','Product List'); ?>
<?php $__env->startSection('add_link','/product/create'); ?>
<?php $__env->startSection('page_name','Product'); ?>
<?php $__env->startSection('thead'); ?>
	<td class="image">Product Image</td>
	<td class="description"></td>
	<td class="price">Price</td>
	<td class="quantity">View Count</td>
	<td class="total">Category</td>
	<td></td>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tbody'); ?>
	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td class="cart_product">
				<a href="#">
					<?php 
						$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
					 ?>
					<img src="<?php echo e(asset('assets/images/'.$image)); ?>" alt="<?php echo e($product->name); ?>" width="85px">
				</a>
			</td>
			<td class="cart_description">
				<h4><a href="#"><?php echo e($product->name); ?></a></h4>
				<p><?php echo e($product->subDescription); ?></p>
			</td>
			<td class="cart_price">
				<p>₦<?php echo e($product->price); ?></p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<a class="cart_quantity_up" href="#"> + </a>
					<input class="cart_quantity_input" type="text" 
						name="quantity" value="<?php echo e($product->view_count); ?>" 
						autocomplete="off" size="2">
					<a class="cart_quantity_down" href="#"> + </a>
				</div>
			</td>
			<td class="cart_total">
				<p class="cart_total_pric">
					<?php echo e($product->category->name); ?>

				</p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" 
					href="/product/<?php echo e($product->unique_id); ?>/edit"
					style="background:#5bc0de;">
					<i class="fa fa-edit"></i>
				</a>
				<a class="cart_quantity_delete" 
					id="<?php echo e($product->unique_id); ?>"
					onclick="deleteProduct(this)"	 
					style="background: #d9534f">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>
	<?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>