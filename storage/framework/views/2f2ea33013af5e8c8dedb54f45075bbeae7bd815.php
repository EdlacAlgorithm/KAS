<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('material-theme/assets/postad/slick.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('material-theme/assets/postad/detail-page.css')); ?>" 
            rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('material-theme/assets/css/jssocials.css')); ?>" rel="stylesheet" 
            type="text/css">
    <link href="<?php echo e(asset('material-theme/assets/css/jssocials-theme-minima.css')); ?>" rel="stylesheet" 
            type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>   
    <div id="page-content" style="transform: translateY(0px);">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><?php echo e($achievement->name); ?></li>
            </ol>
            <div class="item-single row">
                <div class="item-content col-xs-12 col-sm-7 col-md-8">
                    <article class="inner">
                        <header>
                            <h1><?php echo e($achievement->name); ?>

                             <span class="label-wrap hidden-sm hidden-xs">
                                <?php if($achievement->completed == 0): ?>
                                    <span class="label featured">Abadon</span>
                                <?php elseif($achievement->completed == 1): ?>
                                    <span class="label featured">Finished</span>
                                <?php elseif($achievement->completed == 2): ?>
                                    <span class="label featured"> Ongoing</span>
                                <?php endif; ?>
                            </span>
                            </h1>
                            <ul class="info-list">
                                <li><i class="fa fa-th-list"></i>
                                    <a href="#">
                                        <?php echo e($achievement->category->name); ?>

                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    Started On: <?php echo e($achievement->started_at->format('d/m/Y')); ?>

                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    End On: <?php echo e($achievement->ended_at->format('d/m/Y')); ?>

                                </li>
                                <li><i class="fa fa-eye"></i> Views:<?php echo e($achievement->view_count); ?></li>
                            </ul>
                        </header>
                        <div class="item-gallery-slider">
                            <div class="item-lg-images">
                                <a href="#" class="trigger-gallery">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                                <div class="slick-carousel slick-lg-images" data-asnav=".slick-sm-images" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="true">
                                    <?php $__currentLoopData = $achievement->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item-lg-thumb imgAsBg">
                                            <img src="<?php echo e(asset('storage/projects/thumbs/'.$gallery.'.jpg')); ?>" 
                                                 alt="<?php echo e($achievement->name); ?>">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="item-sm-images">
                                <div class="slick-carousel slick-sm-images" data-focus="true" data-asnav=".slick-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                    <?php $__currentLoopData = $achievement->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item-sm-thumb">
                                            <div class="imgAsBg">
                                                <img src="<?php echo e(asset('storage/projects/thumbs/'.$gallery.'.jpg')); ?>" 
                                                    alt="<?php echo e($achievement->name); ?>">
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="full-width-gallery">
                            <div class="inner">
                                <div class="container">
                                    <div class="gallery-lg-area">
                                        <a href="#" class="close-lg-gallery"><i class="fa fa-close"></i></a>
                                        <div class="slick-carousel slick-gallery-lg-images" data-asnav=".slick-gallery-thumbs" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="false">
                                            <?php $__currentLoopData = $achievement->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="item-lg-thumb imgAsBg">
                                                    <img src="<?php echo e(asset('storage/projects/thumbs/'.$gallery.'.jpg')); ?>" 
                                                         alt="<?php echo e($achievement->name); ?>">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-thumbs">
                                    <div class="container">
                                        <div class="gallery-thumbs-inner">
                                            <div class="slick-carousel slick-gallery-thumbs" data-focus="true" data-asnav=".slick-gallery-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
                                                <?php $__currentLoopData = $achievement->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item-lg-thumb imgAsBg">
                                                        <img src="<?php echo e(asset('storage/projects/thumbs/'.$gallery.'.jpg')); ?>" 
                                                             alt="<?php echo e($achievement->name); ?>">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-widget" id="tag-tag">
                            <div class="detail-title">
                                <h2 class="title-left">Description</h2>
                            </div>
                            <div class="inner">
                                <?php echo e($achievement->comment); ?>

                            </div>
                        </div>
                        <div class="text-widget">
                            <div class="detail-title">
                                <h2 class="title-left">States </h2>
                            </div>
                            <div class="inner">
                                <ul class="tags">
                                    <?php $__currentLoopData = $achievement->states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="#"><?php echo e($state->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <section id="send-message">
                            <?php echo $__env->make('frontend._pertial.flash',[
                            'sucess'=>'Sucessfully submitted',
                             'message'=>'Thanks for given us your feedback'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="property-description detail-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Comment on <?php echo e($achievement->name); ?></h2>
                                </div>
                                <form action="/detail/contact/" method="post">
                                    <div class="input-field">
                                        <label for="message">Enter your comment</label>
                                        <textarea name="message" class="materialize-textarea" 
                                                  id="message" rows="4">
                                        </textarea>
                                    </div>
                                    <div class="input-field">
                                        <input type="hidden" name="achievement_unique_id" 
                                                value="<?php echo e($achievement->unique_id); ?>">
                                        <input type="submit" class="btn btn-primary btn-rounded" value="COMMENT">
                                        <?php echo e(csrf_field()); ?>

                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                        </section>
                    </article>
                </div>
                <aside class="sidebar col-xs-12 col-sm-5 col-md-4">
                    <div class="inner">
                        <div class="price-widget short-widget">
                            <strong>Benefits</strong>
                        </div>
                        <div class="user-widget text-center">
                            <?php $__currentLoopData = $achievement->benefitNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h4><?php echo e($benefit->name); ?></h4>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div style="padding: 10px 0;">
                                <?php if(!Auth::guest()): ?>
                                    <a href="/projects/<?php echo e($achievement->unique_id); ?>/edit">
                                        <button type="button" class="btn btn-primary m-b-5">
                                            <i class="fa fa- fa-edit"></i> EDIT
                                        </button>
                                    </a><br/>
                                    <a href="#" onclick="sweet_alert(function(){
                                                        getElementById('deleteForm').submit()})">
                                        <button type="button" class="btn btn-danger m-b-5">
                                            <i class="fa fa- fa-trash-o"></i>  DELETE
                                        </button>
                                    </a>
                                    <form method="post" action="/projects/<?php echo e($achievement->unique_id); ?>" 
                                          id="deleteForm">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('delete')); ?>

                                    </form>
                                <?php endif; ?>
                                <a href="#send-message">
                                    <button type="button" class="btn btn-primary m-b-5">
                                       <i class="fa fa- fa-comment"></i> Comment
                                    </button>
                                </a><br/>
                                <?php if(!Auth::guest()): ?>
                                    <a href="/projects">
                                        <button type="button" class="btn btn-primary m-b-5">
                                            <i class="fa fa- fa-chevron-left"></i> Projects List
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="share-widget">
                            <span> Share project:</span>
                            <div class="social-share"></div>
                        </div>

                        <div class="spnser-widget hidden">
                            <img src="<?php echo e(asset('material-theme/assets/img/spenser.jpg')); ?>" alt="spnser" width="100%">
                        </div>
                        <section style="margin-top: 20px;">
                            <h2>Other Projects</h2>
                            <?php $__currentLoopData = $achievement->otherAchievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <a href="/detail/<?php echo e($achievement->unique_id); ?>" class="ad-listing">
                                        <div class="description">
                                            <div class="label label-default">
                                                <?php echo e($achievement->category->name); ?>

                                            </div>
                                            <h3><?php echo e($achievement->name); ?></h3>
                                            <h4>Started : <?php echo e($achievement->started_at->diffForHumans()); ?></h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img alt="<?php echo e($achievement->name); ?>"
                                                src="<?php echo e(asset('storage/projects/thumbs/'.$achievement->gallery[0].'.jpg')); ?>">
                                        </div>
                                        <!--end image-->
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('material-theme/assets/postad/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('material-theme/assets/postad/app.js')); ?>"></script>
    <script src="<?php echo e(asset('material-theme/assets/js/socialshare.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>