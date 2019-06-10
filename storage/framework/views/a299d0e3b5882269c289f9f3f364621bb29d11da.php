<?php $__env->startSection('content'); ?>
    <div id="page-content" style="transform: translateY(0px);">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Back Home</a></li>
                <li class="active">404 error</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center error">
                <h1>404</h1>
                <h2>error</h2>
                <p>An error occur please contact the administrator </p>
            </section>
            <!--end page-title-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <form class="form inputs-underline">
                        <div class="form-group center">
                            <a href="/" class="btn btn-primary ju-btn-default btn-filled rounded">Go Home</a>
                        </div><!-- /input-group -->
                    </form>
                    <!--end form-->
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>