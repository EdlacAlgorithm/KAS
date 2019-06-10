<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css"
		href="<?php echo e(asset('/material-theme/assets/datatables/jquery.dataTables.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('/material-theme/assets/css/dtable.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_title','States'); ?>
<?php $__env->startSection('action_link'); ?>
    <a href="#" class="postadinner">
        <span> <i class="fa fa-plus-circle"></i></span>
    </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_content'); ?>
    <div class="inner-box"><h1>States </h1>
        <div class="table-responsive">

          <!-- Pagination -->
            <div class="mt30 clearfix">
            	<div class="adv-table editable-table ">
            	    <div class="clearfix">
            	        <div class="btn-group">
            	            <button id="editable-sample_new" class="btn btn-primary">
            	                Add New <i class="fa fa-plus"></i>
            	            </button>
            	        </div>
            	    </div>
            	    <div class="space15"></div>
            	    <table class="table table-striped table-hover table-bordered" id="editable-sample">
            	        <thead>
            	        <tr>
            	            <th>Title</th>
            	            <th>Edit</th>
            	            <th>Delete</th>
            	            <th>Id</th>
            	        </tr>
            	        </thead>
            	        <tbody>
            	        	<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		            	        <tr class="">
		            	            <td><?php echo e($state->name); ?></td>
		            	            <td><a class="edit" href="javascript:;">Edit</a></td>
		            	            <td><a class="delete" href="javascript:;">Delete</a></td>
		            	            <td><?php echo e($state->id); ?></td>
		            	        </tr>
	            	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	        </tbody>
            	    </table>
            	</div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        var $path = '/state/';
    </script>
	<script type='text/javascript' 
		src='<?php echo e(asset("material-theme/assets/datatables/jquery.dataTables.min.js")); ?>'>
	</script>
	<script type='text/javascript' 
		src='<?php echo e(asset("material-theme/assets/datatables/DT_bootstrap.js")); ?>'>
	</script>
	<script type='text/javascript' 
		src='<?php echo e(asset("material-theme/assets/js/category-table.js")); ?>'>
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>