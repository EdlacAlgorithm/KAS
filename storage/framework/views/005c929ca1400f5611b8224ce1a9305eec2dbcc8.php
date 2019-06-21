<header id="heade"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> <?php echo e(config('app.call_number')); ?></a></li>
                            <li><a href="mail:to<?php echo e(config('app.email_address')); ?>"><i class="fa fa-envelope"></i> <?php echo e(config('app.email_address')); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo e(config('app.facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo e(config('app.twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo e(config('app.linkedin')); ?>"><i class="fa fa-linkedin"></i></a></li>
                            
                            <li><a href="<?php echo e(config('app.google_plus')); ?>"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="<?php echo e(asset('assets/images/kas/logo.jpg')); ?>" alt="" height="45px" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/#latestproducts">
                                    <i class="fa fa-crosshairs"></i> Latest
                                </a>
                            </li>
                            <li>
                                <a href="/#categoriseproducts">
                                    <i class="fa fa-crosshairs"></i> Categorise
                                </a>
                            </li>
                            <li>
                                <a href="/#testimonials">
                                    <i class="fa fa-crosshairs"></i> Testimonial
                                </a>
                            </li>
                            <li><a href="/product/listing"><i class="fa fa-crosshairs"></i> Listing</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    
</header><!--/header-->