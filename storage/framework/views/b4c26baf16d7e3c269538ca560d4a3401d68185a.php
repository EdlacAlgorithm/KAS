<?php $__env->startSection('content'); ?>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{LINK_INDEX}">HOME</a></li>
                <li class="active">Login</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <div class="middle-dabba">
                        <h1>Login Here</h1>
                        

                        <div id="post-form" style="padding:10px">
                            <?php if($errors->any()): ?>
                                <article class="byMsg byMsgError" style="margin-bottom: 40px;" id="formErrors">
                                    ! <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?> 
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </article>
                            <?php endif; ?>
                            <form method="post" action="/login">
                                <div class="input-field">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email">
                                </div>
                                <!--end form-group-->
                                <div class="input-field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div class="form-group">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit"  id="submit" class="btn btn-primary waves-effect">
                                        LOGIN
                                    </button>&nbsp;&nbsp;
                                    <a href="<?php echo e(route('password.request')); ?>" class="forgotlink">Forgot Password?</a>
                                </div>
                                <!--end form-group-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>