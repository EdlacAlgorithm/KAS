<?php $__env->startSection('style'); ?>
	<link href="<?php echo e(asset('assets/css/demo_table.css')); ?>" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/DT_bootstrap.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/MultiFileUpload.css')); ?>">
	<?php echo $__env->yieldContent('page_style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_body'); ?>
    <section id="cart_items">
    	<div class="container">
    		<div class="row">
    		<div class="col-md-3">
    		<div class="breadcrumbs">
    			<ol class="breadcrumb">
    			  <li><a href="/">Home</a></li>
    			  <li class="active"><?php echo $__env->yieldContent('page_name'); ?></li>
    			</ol>
    		</div>
    		</div>
    		<div class="col-md-9" style="padding-left:70px;">
    			<div class="shop-menu pull-righ">
    			    <ul class="nav navbar-nav">
    			    	<?php $__currentLoopData = $sidenavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidenav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			        	<?php echo $sidenav; ?>

    			        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    			    </ul>
    			</div>
    		</div>
    		</div>
    		<div class="row">
	    		<div class="col-md-offset-1 col-md-10">
					<?php echo $__env->make('backend._pertial.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<a href="<?php echo $__env->yieldContent('add_link'); ?>" <?php echo $__env->yieldContent('modal'); ?>
						class="btn btn-info pull-right" 
	    				style="margin:15px;">
	    				<i class="fa fa-plus"></i>
	    				Add <?php echo $__env->yieldContent('page_name'); ?>
	    			</a>
		    		<div class="table-responsive cart_info">
		    			<table class="table table-condensed" id="datatable">
		    				<thead>
		    					<tr class="cart_menu">
		    						<?php echo $__env->yieldContent('thead'); ?>
		    					</tr>
		    				</thead>
		    				<tbody>
		    					<?php echo $__env->yieldContent('tbody'); ?>
		    				</tbody>
		    			</table>
		    			<?php echo $__env->yieldContent('pagination'); ?>
		    		</div>
	    		</div>
    		</div>
    	</div>
    </section> <!--/#cart_items-->       
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
 	<script type='text/javascript' src='<?php echo e(asset("assets/js/jquery.dataTables.js")); ?>'></script>
	 <script type='text/javascript' src='<?php echo e(asset("assets/js/DT_bootstrap.js")); ?>'></script>
	 <script type="text/javascript" src="<?php echo e(asset('assets/js/jQuery.MultiFile.min.js')); ?>"></script>
	 <script type="text/javascript" src="<?php echo e(asset('assets/js/MultiFileUpload.js')); ?>"></script>
	 <?php echo $__env->yieldContent('page_script'); ?>
	 <script src="<?php echo e(asset('assets/js/custom.modal.js')); ?>"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$('#datatable').dataTable();
 		});
 	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>