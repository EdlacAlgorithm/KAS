<div class="brands_products"><!--brands_products-->
    <h2>Category</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/product/listing?category=<?php echo e($category->id); ?>"> 
                        <?php echo e($category->subName); ?>

                        <span class="pull-right">
                            <?php echo e($category->shishas_count); ?>

                        </span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div><!--/brands_products-->

