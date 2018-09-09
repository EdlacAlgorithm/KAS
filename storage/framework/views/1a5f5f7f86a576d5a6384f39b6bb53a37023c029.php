<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
	<!-- .row -->
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Active Ads</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-check text-info"></i></li>
                            <li class="text-right"><span class="counter"><?php echo e($activePostCount); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Inactive Ads</h3>
                        <ul class="list-inline two-part">
                            <li><i class="fa fa-info-circle text-purple"></i></li>
                            <li class="text-right"><span class="counter"><?php echo e($inactivePostCount); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Inactive USERS</h3>
                        <ul class="list-inline two-part">
                            <li><i class="fa fa-user-times text-danger"></i></li>
                            <li class="text-right"><span class=""><?php echo e($inactiveUserCount); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">TOTAL USERS</h3>
                        <ul class="list-inline two-part">
                            <li><i class="fa fa-users text-success"></i></li>
                            <li class="text-right"><span class=""><?php echo e($userCount); ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h4 class="box-title">Recent 5 Ads</h4>
                    <?php $__currentLoopData = $resentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resentPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="pro-list">
                            <div class="pro-img p-r-10">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo e(asset('storage/products/thumb/'.$resentPost->gallery[0].'.jpg')); ?>" 
                                    alt="<?php echo e($resentPost->name); ?>" 
                                    style="width: 100px; height: 66px;">
                                </a>
                            </div>
                            <div class="pro-detail">
                                <h5 class="m-t-0 m-b-5">
                                    <a href="post_detail.php?id=1"><?php echo e($resentPost->name); ?></a>
                                </h5>
                                <p class="text-muted font-12"><?php echo e($resentPost->created_at->diffForHumans()); ?>| <?php echo e($resentPost->name); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="text-right">
                    <a href="/post" class="btn btn-sm btn-rounded btn-info m-t-10">View All</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Recent Registered</h3>
               
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>DATE</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $newRegUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newRegUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="txt-oflo"><?php echo e($newRegUser->name); ?></td>
                                    <td><span class="label label-megna label-rounded"><?php echo e($newRegUser->email); ?></span></td>
                                    <td class="txt-oflo"><?php echo e($newRegUser->created_at->diffForHumans()); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <a href="/user">Check all Users</a> </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>