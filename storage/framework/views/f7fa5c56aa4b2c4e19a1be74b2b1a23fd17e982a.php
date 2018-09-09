<section class="block background-is-dark" style="background: #8e8e89;">
    <div class="container">
        <div class="section-title vertical-aligned-elements">
            <div class="element text-align-right">
                <h2 class="invisible-on-mobile pull-left featured-ads-label">
                    Oldest Projects
                </h2>
                <div id="latest-nav" class="gallery-nav">
                </div>
            </div>
        </div>
        <!--end section-title-->
    </div>
    <div class="gallery featured container">
        <div class="owl-carousel owl-loaded owl-drag" data-owl-items="4" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#latest-nav">  
            <?php $__currentLoopData = $oldestAchievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                <div class="ribbon-pad">
                    <div class="item mar-left-zero" data-id="<?php echo e($achievement->id); ?>">
                        <div class="premium">
                            <?php if($achievement->completed == 0): ?>
                                <span class="listing-box-premium featured"> 
                                    Abadon
                                </span>
                            <?php elseif($achievement->completed == 1): ?>
                                <span class="listing-box-premium urgent">   
                                    Finished
                                </span>
                            <?php elseif($achievement->completed == 2): ?>
                                <span class="listing-box-premium highlight">
                                    Ongoing
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="ad-listing">
                            <div class="description">
                                <a href="/achievements?category=
                                    <?php echo e($achievement->category->id); ?>&
                                    categoryName=<?php echo e($achievement->category->name); ?>">
                                    <div class="label label-default">
                                        <?php echo e($achievement->category->name); ?>

                                    </div>
                                </a>
                                <h3 title="<?php echo e($achievement->name); ?>">
                                    <a href="/achievement/<?php echo e($achievement->unique_id); ?>">
                                        <?php echo e($achievement->name); ?>

                                    </a>
                                </h3>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="<?php echo e(asset('storage/projects/thumbs/'.$achievement->gallery[0].'.jpg')); ?>" alt="<?php echo e($achievement->name); ?>">
                            </div>
                            <!--end image-->
                        </div>
                        <div class="additional-info">
                            <ul class="icondetail">
                                <li>
                                    <i class="fa fa-calendar"></i> 
                                    Started On: <?php echo e($achievement->started_at->format('M j, Y')); ?>

                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i> 
                                    <?php if($achievement->completed == 0): ?>
                                        Ended On: Unkown
                                    <?php elseif($achievement->completed == 1): ?>
                                        Ended On: <?php echo e($achievement->ended_at->format('M j, Y')); ?>

                                    <?php elseif($achievement->completed == 2): ?>
                                        Ended On: Still In progress
                                    <?php endif; ?>
                                </li>
                            </ul>  
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($oldestAchievements->appends(['latest'=>$latestAchievements->currentPage()])->links()); ?>

    </div>

    <!--end gallery-->
    <div class="background-wrapper">
        <div class="background-color background-color-default">
        </div>
    </div>
    <!--end background-wrapper-->
</section>