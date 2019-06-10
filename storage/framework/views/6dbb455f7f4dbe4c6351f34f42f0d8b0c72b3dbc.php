<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/MultiFileUpload.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_title','Edit Product'); ?>
<?php $__env->startSection('content_body'); ?>
	 <div id="contact-page" class="container">
		<div class="bg">  	
			<div class="row">  	
	    		<div class="col-sm-offset-2 col-sm-8">
	    			<div class="contact-form">
	    				<?php echo $__env->make('frontend._pertial.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				    	<form id="main-contact-form" class="contact-form row" 
                             method="post" action="/product/<?php echo e($product->unique_id); ?>" 
                             enctype="multipart/form-data">
				            
				            <div class="form-group col-md-12">
				                <input type="text" name="name" class="form-control" 
                                    required="required" placeholder="Name"
                                    value="<?php echo e($product->name); ?>">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="price" class="form-control" 
                                    required="required" placeholder="Price"
                                    value="<?php echo e($product->price); ?>">
				            </div>
				            <div class="form-group col-md-12">
				                <select class="form-control" name="category_id" id="category" 
				                	required="">
				                	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" 
                                            <?php echo e($category->id == $product->category_id ? 'selected':''); ?>>
				                			<?php echo e($category->name); ?>

				                		</option>
				                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                </select>
				            </div>
				            <div class="form-group col-md-12">
				                <p id="for_ad_image" class="valError text-danger small"></p>
                                <div class="file-upload-previews">
                                    <div class="MultiFile-label">
                                        <a class="MultiFile-remove" href="#" id="removeAdImg" 
                                            data-item-id="<?php echo e($product->id); ?>" 
                                            data-img-name="<?php echo e($product->image); ?>">x</a> 
                                        <span>
                                            <span class="MultiFile-label" 
                                                title="File selected: <?php echo e($product->image); ?>.jpg">
                                                <span class="MultiFile-title"><?php echo e($product->image); ?>.jpg</span>
                                                <img class="MultiFile-preview" 
                                                        style="max-height:100px;product max-width:100px;" 
                                                        src="<?php echo e(asset('assets/images/product/list_'.$product->image.'.jpg')); ?>">
                                            </span>
                                        </span>
                                        <input type="hidden" name="previousImage" value="<?php echo e($product->image); ?>" />
                                    </div>
                                </div>
				                <div class="file-upload" style="display:none">
				                    <input type="file" name="image" 
				                    class="file-upload-input with-preview" 
				                    title="Click to add files" 
				                    maxlength="1" accept="jpg|png" 
				                    onchange="checkFile(this)" id="img">
				                    <span style="color:#000">CLICK OR DRAG IMAGES HERE</span>
				                    <input type="hidden" id="imgCount" value="1"/>
				                </div>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="description" id="message" required="required" 
				                	class="form-control" rows="4" 
                                    placeholder="Product description">
                                    <?php echo e($product->description); ?>

				                </textarea>
				            </div>                        
				            <div class="form-group col-md-12 text-center">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('put')); ?>

				                <input type="submit" class="form-control btn btn-success" 
				                	value="Create" style="background:#FE980F;color:#fff;">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    	</div>  
		</div>	
	</div><!--/#contact-page-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script type="text/javascript" src="<?php echo e(asset('assets/js/jQuery.MultiFile.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/js/select2_init.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/js/MultiFileUpload.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>