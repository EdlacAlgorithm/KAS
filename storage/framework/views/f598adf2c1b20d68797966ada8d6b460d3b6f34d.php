<aside>
    <div class="inner-box">
        <div class="user-panel-sidebar">
            <div class="collapse-box">
            	<h5 class="collapse-title"> 
            		NewNaija 
            		<a class="pull-right" data-toggle="collapse" 
            			href="#MyAds">
            			<i class="fa fa-angle-down"></i>
            		</a>
            	</h5>

                <div id="MyAds" class="panel-collapse collapse in">
                    <ul class="acc-list">
                    	<?php $__currentLoopData = $sidenavs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<?php echo $nav; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>