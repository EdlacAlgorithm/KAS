<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/widget.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_body'); ?>
    <section id="cart_items">
    	<div class="container">
    		<div class="row">
                <div class="col-md-3">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-9" style="padding-left:70px;">
                    <div class="shop-menu pull-righ">
                        <ul class="nav navbar-nav">
                            <?php $__currentLoopData = $sidenavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidenav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $sidenav; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-unlock"></i> 
                                    Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
    		</div>
    		<div class="row">
	    		<div class="col-md-offset-1 col-md-10">
                    <div class="col-md-12" style="margin-bottom:2%">
                        <div class="row">
                            <div class="col-md-6">            
                                <div class="widget navy-bg p-lg text-center">
                                    <div class="m-b-md">
                                        <i class="fa fa-truck fa-4x"></i>
                                        <h1 class="m-xs"><?php echo e($productCount); ?></h1>
                                        <h3 class="font-bold no-margins">Product</h3>
                                        <small>Number of Products</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="widget lazur-bg p-lg text-center">
                                    <div class="m-b-md">
                                        <i class="fa fa-sitemap fa-4x"></i>
                                        <h1 class="m-xs"><?php echo e($categoryCount); ?></h1>
                                        <h3 class="font-bold no-margins">Category</h3>
                                        <small>Number of category</small>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6"> 
                                <div class="widget yellow-bg p-lg text-center">
                                    <div class="m-b-md">
                                        <i class="fa fa-users fa-4x"></i>
                                        <h1 class="m-xs"><?php echo e($testimonialCount); ?></h1>
                                        <h3 class="font-bold no-margins">Testimonial</h3>
                                        <small>Number of testimonial</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="widget red-bg p-lg text-center">
                                    <div class="m-b-md">
                                        <i class="fa fa-image fa-4x"></i>
                                        <h1 class="m-xs"><?php echo e($sliderCount); ?></h1>
                                        <h3 class="font-bold no-margins">Slider</h3>
                                        <small>Number of slider</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	    		</div>
    		</div>
    	</div>
    </section> <!--/#cart_items-->       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>