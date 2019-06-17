<header id="header"><!--header-->
<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i> +234 95 01 88 821</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                    <a href="/"><img src="<?php echo e(asset('assets/images/kas/logo.png')); ?>" alt="" /></a>
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

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-9">
                <div class="mainmenu">
                    <form class="form-inline" action="/product/listing" method="get">
                        <div class="price-rang form-group"><!--price-range-->
                            <?php  
                                $prices = '[1500,2500]';
                                if(request('price')){
                                    $prices = explode(',',request('price'));
                                    $prices = '['.$prices[0].','.$prices[1].']';
                                }
                             ?>
                            <div class="wel text-center" style="padding-right:10px">
                                 <input type="text" class="span2" value="" name="price" 
                                 data-slider-min="1000" data-slider-max="5000" 
                                 data-slider-step="500" data-slider-value="<?php echo e($prices); ?>" id="sl2"><br/>
                                 <b class="pull-left">₦1000</b> <b class="pull-right">₦5000</b>
                            </div>
                        </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="search" 
                            placeholder="What ?" value="<?php echo e(request('search')); ?>">
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="category">
                            <option value="0">All</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>" 
                                    <?php echo e(request('category') == $category->id?'selected':''); ?>>
                                    <?php echo e($category->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <button type="submit" class="bt btn-info" 
                              style="height: 35px;border-radius:5%;">
                                Search
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
</header><!--/header-->