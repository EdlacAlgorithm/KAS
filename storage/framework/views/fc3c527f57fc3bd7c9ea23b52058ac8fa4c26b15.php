<?php $__env->startSection('content'); ?>
    <div class="container text-center">
        <div class="logo-404">
            <a href="/"><img src="<?php echo e(asset('assets/images/home/logo.png')); ?>" alt="" /></a>
        </div>
        <div class="content-404">
            <img src="<?php echo e(asset('assets/images/404/404.png')); ?>" class="img-responsive" alt="" />
            <h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
            <p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
            <h2><a href="/">Bring me back Home</a></h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>