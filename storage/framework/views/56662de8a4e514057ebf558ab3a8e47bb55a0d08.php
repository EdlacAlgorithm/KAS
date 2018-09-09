<?php $__env->startSection('page_title','Projects'); ?>
<?php $__env->startSection('action_link'); ?>
    <a href="/projects/create" class="postadinner">
        <span> <i class="fa fa-plus-circle"></i> Add <?php echo $__env->yieldContent('page_title'); ?></span>
    </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_content'); ?>
    <div class="inner-box"><h1>Projects </h1>
        <div class="table-responsive">
            <div class="table-action">
                <div class="table-search pull-right col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-7 control-label text-right"> &nbsp; </div>
                        <div class="col-xs-5 searchpan">
                            <form method="post">
                                <div class="input-field">
                                    <label for="filter" class="active"></label>
                                    <input type="text" class="live-search-box" id="filter" name="filter" placeholder="Press enter for search" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <span class="success-msg hideresult" id="successMsg"></span> <span class="error-msg hideresult" id="errorMsg"></span>
            <table id="js-table-list" 
            	class="table table-striped table-bordered add-manage-table table demo footable-loaded footable" 
            	data-filter="#filter" data-filter-text-only="true">
                <thead>
                <tr>
                    <th> Name</th>
                    <th> Category</th>
                    <th> Started Date</th>
                    <th> Status</th>
                    <th data-sort-ignore="true"> Options</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="ajax-item-listing" 
                    	data-item-id="<?php echo e($achievement->id); ?>">
                        <td class="add-img-td  width-20-per">
                            <a href="/achievement/<?php echo e($achievement->unique_id); ?>">
                                <?php echo e($achievement->subName); ?>

                            </a>
                        </td>
                        <td class="ads-details-td width-20-per">
                            <?php echo e($achievement->category->subName); ?>

                        </td>
                        <td class="ads-details-td width-30-per">
                            <?php echo e($achievement->started_at->format('M j, Y')); ?>

                        </td>
                        <td class="price-td width-10-per">
                            <?php if($achievement->completed == 0): ?>
                                Abadon
                            <?php elseif($achievement->completed == 1): ?>
                                Finished
                            <?php elseif($achievement->completed == 2): ?>
                                Ongoing
                            <?php endif; ?>
                        </td>

                        <td class="action-td width-20-per">
                            <div>
                                <p class="opacity1">
                                    <a class="btn btn-info btn-rounded btn-xs" 
                                    href="/projects/<?php echo e($achievement->unique_id); ?>/edit" 
                                    data-ajax-action="deleteMyAd">
                                    <i class=" fa fa-pencil"></i> Edit
                                	</a>
                                </p>
                                <p class="opacity1">
                                	<form method="post" id="delete_achievement" 
                                		action="/projects/<?php echo e($achievement->unique_id); ?>"> 
                                		<?php echo e(method_field('DELETE')); ?>

                                		<?php echo e(csrf_field()); ?>

                                        <a class="btn btn-danger btn-rounded btn-xs item-js-delete" href="#" 
                                        onclick="sweet_alert(function(){
                                        	$('#delete_achievement').submit()
                                        });" 
                                        data-ajax-action="deleteMyAd">
                                        	<i class=" fa fa-trash-o"></i> Delete
                                        </a>
                                    </form>
                                </p>
                        	</div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($achievements) <= 0): ?>
                        <tr id="norecord">
                            <td colspan="5">NO RESULT FOUND</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="mt30 clearfix">
                <?php echo e($achievements->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>