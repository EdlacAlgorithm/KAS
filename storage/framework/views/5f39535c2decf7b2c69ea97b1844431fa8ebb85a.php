<?php $__env->startSection('content'); ?>
	<div id="page-content">
	    <div class="container">
	        <ul class="breadcrumb bcstyle2">
	            <li><a href="/">Home</a></li>
	            <li class="active"><a><?php echo $__env->yieldContent('page_title'); ?></a></li>
	        </ul>
	        <?php echo $__env->yieldContent('action_link'); ?>
	        <!--end breadcrumb-->
	        <section class="page-title center"><h1>All <?php echo $__env->yieldContent('page_title'); ?></h1></section>
	        <!--end page-title-->
	        <section>
	            <div class="row mt40">
	                <div class="col-sm-2 page-sidebar">
	                    <?php echo $__env->make('backend._pertial.left_navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	                </div>
	                <div class="col-sm-10 page-content">
	                    <?php echo $__env->yieldContent('page_content'); ?>
	                </div>
	            </div>
	        </section>

	    </div>
	    <!--end container-->
	</div> <!--end page-content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>