
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 col-sm-4">
        <div class="list-item" style="margin-bottom:10px;">
            <div class="title">
                <div class="icon">
                    
                    <i class="pe-7s-home"></i>
                </div>
                <h3><a href="achievement/listing?category=<?php echo e($category->id); ?>&categoryName=<?php echo e($category->name); ?>">
                        <?php echo e($category->subName); ?> (<?php echo e($category->achievements_count); ?>)
                    </a>
                </h3>
            </div>
        </div>
    </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
