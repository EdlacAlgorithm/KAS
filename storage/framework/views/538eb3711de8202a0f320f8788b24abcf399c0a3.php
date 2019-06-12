<div class="modal fade" id="modalComponet" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel"><?php echo e($modalTitle); ?></h4>
            </div>
            <form method="post" action="<?php echo e($modalFormAction); ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <?php echo e($modalBody); ?>

                    </div>
                </div>
                <div class="modal-footer">
                    <?php echo e(csrf_field()); ?>

                    <?php $__env->startSection('modalFooter'); ?>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" style="background: #5bc0de;">Save</button>
                    <?php echo $__env->yieldSection(); ?>
                </div>
            </form>
        </div>
    </div>
</div>