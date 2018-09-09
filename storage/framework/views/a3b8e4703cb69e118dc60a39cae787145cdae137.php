<?php $__env->startSection('content'); ?>
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb bcstyle2">
            <li><a href="/">HOME</a></li>
            <li><a href="/achievements">Listing</a></li>
            <li class="active"> 
                <?php if(request('categoryName') !== null): ?> 
                    <?php echo e(request('categoryName')); ?> (Category) 
                <?php else: ?>
                    All Categories 
                <?php endif; ?>
            </li>
        </ol>
        <a href="#" class="postadinner"><span> <i class="fa fa-plus-circle"></i></span></a>

        <form method="get" name="locationForm" id="LocationForm">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section><h2>Search Filter</h2>
                            <div class="input-field">
                                <select name="category" class="meterialselect initialized">
                                    <option value="">What ?</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>">
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <!--end input-field-->
                            <div class="input-field" id="school-popup">
                                <select name="state" class="meterialselect initialized">
                                    <option value="">Where ?</option>
                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($state->id); ?>">
                                            <?php echo e($state->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                           

                            <!--end input-field-->
                            <div class="form-group">
                                <label>When ?</label>
                                <div class="inner">
                                    <div class="range-widget">
                                        <div class="range-inputs">
                                            <input type="text" name="start" placeholder="From" 
                                                    value="<?php echo e(request('start')); ?>">
                                            <input type="text" name="end" placeholder="To" 
                                                   value="<?php echo e(request('end')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--end price-slider-->
                            </div>
                            <!--end input-field-->

                            <div class="input-field">
                                <button type="submit"  class="btn btn-primary pull-right"> 
                                    Search Now<i class="fa fa-search"></i>
                                </button>
                            </div>
                            <!--end input-field-->
                        </section>
                    </aside>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9 col-sm-9">
                    <section>
                        <h2>Achievements Listings</h2>
                        <section>
                            <form action="#" id="filterForm" method="get">
                                <div class="search-results-controls clearfix">
                                    <div class="pull-left">
                                        <span id="grid" class="circle-icon cursor-point active">
                                            <i class="fa fa-th icon-white"></i>
                                        </span>
                                        <span id="list" class="circle-icon cursor-point">
                                            <i class="fa fa-bars"></i>
                                        </span>
                                    </div>
                                    <input type="hidden" name="subcat" value="">
                                    <!--end left-->
                                    <div class="pull-right">
                                        <div class="input-group inputs-underline min-width-150px">
                                            <select class="meterialselect" name="limit" 
                                                onchange="this.form.submit()">
                                                <option value="6">Limit Order</option>
                                                <option value="10" <?php if(request('limit') == 10): ?> selected <?php endif; ?> >
                                                    10
                                                </option>
                                                <option value="15" <?php if(request('limit') == 15): ?> selected <?php endif; ?> >
                                                    15
                                                </option>
                                                <option value="20" <?php if(request('limit') == 20): ?> selected <?php endif; ?> >
                                                    20
                                                </option>
                                                <option value="25" <?php if(request('limit') == 25): ?> selected <?php endif; ?> >
                                                    25
                                                </option>
                                                <option value="30" <?php if(request('limit') == 30): ?> selected <?php endif; ?> >
                                                    30
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end right-->
                                    <div class="pull-right mar-right-20">
                                        <div class="input-group inputs-underline min-width-150px">
                                            <select class="meterialselect" name="sort" 
                                                    onchange="this.form.submit()">
                                                <option value="">Sort By</option>
                                                <option value="name" 
                                                        <?php if(request('sort') =="name"): ?> selected <?php endif; ?>>    Name 
                                                </option>
                                                <option value="started_at" 
                                                        <?php if(request('sort') =="started_at"): ?> selected <?php endif; ?>> Start Date
                                                </option>
                                                <option value="category" 
                                                        <?php if(request('sort') =="category"): ?> selected <?php endif; ?> > 
                                                    Category 
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end right-->
                                    <div class="pull-right mar-right-20">
                                        <div class="input-group inputs-underline min-width-150px">
                                            <select class="meterialselect" name="status" 
                                                onchange="this.form.submit()">
                                                <option value=""> Status</option>
                                                <option value="finished" 
                                                        <?php if(request('status') =="finshed"): ?> selected <?php endif; ?>>    Finished 
                                                </option>
                                                <option value="ongoing" 
                                                        <?php if(request('status') =="ongoing"): ?> selected <?php endif; ?>> On going
                                                </option>
                                                <option value="abadon" 
                                                        <?php if(request('status') =="abadon"): ?> selected <?php endif; ?> > 
                                                    Abadon 
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end right-->
                                </div>
                                <!--end search-results-controls-->
                            </form>
                        </section>
                        <section>
                            <div class="" id="serchlist">
                                <div class="searchresult grid hideresult" style="display: none;">
                                    <div class="row">
                                        <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item" data-id="<?php echo e($achievement->id); ?>">
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
                                                        <img src="<?php echo e(asset('storage/products/thumb/'.$achievement->gallery[0].'.jpg')); ?>" alt="<?php echo e($achievement->name); ?>">
                                                    </div>
                                                    <!--end image-->
                                                </div>
                                                <div class="additional-info">
                                                    <ul class="icondetail">
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 
                                                            Started On: <?php echo e($achievement->started_at->format('d-m-Y')); ?>

                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 
                                                            <?php if($achievement->completed == 0): ?>
                                                                End On: Unkown
                                                            <?php elseif($achievement->completed == 1): ?>
                                                                End On: <?php echo e($achievement->ended_at->format('d-m-Y')); ?>

                                                            <?php elseif($achievement->completed == 2): ?>
                                                                End On: Still In progress
                                                            <?php endif; ?>
                                                        </li>
                                                    </ul>  
                                                    <!--end controls-more-->
                                                </div>
                                                <!--end additional-info-->
                                            </div>
                                            <!--end item-->
                                        </div>
                                        <!--<end col-md-4-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="searchresult list hideresult" style="display: none;">
                                    <div class="row">
                                        <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item item-row" data-id="<?php echo e($achievement->id); ?>">
                                            <div class="premium">
                                                <?php if($achievement->completed == 0): ?>
                                                    <span class="listing-box-premium featured">Abadon</span>
                                                <?php elseif($achievement->completed == 1): ?>
                                                    <span class="listing-box-premium urgent">Finished</span>
                                                <?php elseif($achievement->completed == 2): ?>
                                                    <span class="listing-box-premium highlight">
                                                        Ongoing
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="ad-listing">
                                                <div class="image bg-transfer">
                                                    <figure>
                                                        <a href="/achievements?
                                                            category=<?php echo e($achievement->category->id); ?>&
                                                            categoryName=<?php echo e($achievement->category->name); ?>">
                                                            <div class="label-featured label label-default">  
                                                                <?php echo e($achievement->category->name); ?>

                                                            </div>
                                                        </a>
                                                    </figure>

                                                    <img src="<?php echo e(asset('storage/products/thumb/'.$achievement->gallery[0].'.jpg')); ?>" alt="<?php echo e($achievement->name); ?>">
                                                </div>
                                                <!--end image-->
                                                <div class="description">
                                                    <h3 title="<?php echo e($achievement->name); ?>">
                                                        <a href="/detail/<?php echo e($achievement->unique_id); ?>"><?php echo e($achievement->name); ?></a>
                                                    </h3>
                                                    <ul class="icondetail">
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 
                                                            Start On: <?php echo e($achievement->started_at->format('d-m-Y')); ?>

                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 
                                                            <?php if($achievement->completed == 0): ?>
                                                                End On: Unkown
                                                            <?php elseif($achievement->completed == 1): ?>
                                                                End On: <?php echo e($achievement->ended_at->format('d-m-Y')); ?>

                                                            <?php elseif($achievement->completed == 2): ?>
                                                                End On: Still In progress
                                                            <?php endif; ?>
                                                        </li>
                                                    </ul>
                                                    <ul class="tags">
                                                        <?php $__currentLoopData = $achievement->states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($state->name); ?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    
                                                </div>
                                                <!--end description-->
                                            </div>
                                        </div>
                                        <!--end item.row-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <?php if($achievements->isEmpty()): ?>)
                            <section><h4>:( No ads found.</h4></section>
                        <?php endif; ?>

                        <section>
                            <div class="center">
                                <?php echo e($achievements->appends(request()->query())->links()); ?>

                            </div>
                        </section>

                    </section>
                </div>
                <!--end col-md-9-->
            </div>
        </form>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".current").addClass("active");
            if ($('.getParent').length > 0) {
                $('.getParent').parent().addClass('in');
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>