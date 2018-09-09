<section class="block">
    <div class="container">
        <div class="section-title">
            <div class="center">
                <h2>Browse Achievements</h2>
            </div>
        </div>
        <!--end section-title-->
        <div class="categories-list">
            <div class="row">
				<!--Category display dynamically -->
                <?php echo $__env->make('frontend._pertial.category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
				<!--Category display dynamically-->
            </div>
            <!--end row-->
        </div>
        <!--end categories-list-->
    </div>
    <!--end container-->
</section>