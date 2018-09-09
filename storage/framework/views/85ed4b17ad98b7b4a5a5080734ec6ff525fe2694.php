<footer class="footer-v2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-widget widget-about" style="height: 100px;">
                        <div class="widget-top">
                            <h3 class="widget-title">NewNaija</h3>
                        </div>
                        <div class="widget-body">
                            <p>
                                NewNaija is a plateform dedecated to following previous, recent, and onging project in our community(Naija) and getting poeple's feedback
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-widget widget-contact" style="height: 100px;">
                        <div class="widget-top">
                            <h3 class="widget-title">Why NewNaija</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="list-unstyled">
                                 <li>
                                   <i class="fa fa-location-arrow"></i>For positive feedback 
                                 </li>
                                 <li>
                                    <i class="fa fa-location-arrow"></i>Peoples view
                                </li>
                                 <li>
                                    <i class="fa fa-location-arrow"></i></i>Inform others
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-widget widget-contact" style="height: 100px;">
                        <div class="widget-top">
                            <h3 class="widget-title">Useful Links</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                       <i class="fa fa-circle"></i> Naja Tomorrow 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="fa fa-circle"></i> Great Nigeria 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                      <i class="fa fa-circle"></i>  OurNaja 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-widget widget-news" style="height: 150px;">
                        <div class="widget-top">
                            <h3 class="widget-title">Latest Projects</h3>
                        </div>
                        <div class="widget-body">
                            <?php $__currentLoopData = $latestAchievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="/detail/<?php echo e($achievement->unique_id); ?>">
                                            <img class="media-object" 
                                                src="<?php echo e(asset('storage/projects/thumbs/small_'.$achievement->gallery[0].'.jpg')); ?>" 
                                                alt="<?php echo e($achievement->name); ?>" width="85">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="/detail/<?php echo e($achievement->unique_id); ?>">
                                                <?php echo e($achievement->name); ?>

                                            </a>
                                        </h4>
                                        <a href="/detail/<?php echo e($achievement->unique_id); ?>" class="read">
                                            Read more <i class="fa fa-caret-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-sm-3">
                <div class="footer-col">
                    <p>© <?php echo e(date('Y')); ?> NewNaija, All right reserved</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-col">
                    <div class="navi">
                        <ul>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-col foot-social">
                    <p>
                        Follow us
                         <a href="https://www.facebook.com/danger.hope" target="_blank"><i class="fa fa-facebook-square"></i></a>
                         <a href="https://www.twitter.com/thehowegobe" target="_blank"><i class="fa fa-twitter-square"></i></a>
                         <a href="https://plus.google.com/+howegobe" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                         <a href="https://www.youtube.com/user/Ahowegobe" target="_blank"><i class="fa fa-youtube-square"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>