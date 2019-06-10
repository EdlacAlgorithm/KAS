<!--start header section header v1-->
<header class="header-section-default header-main nav-left hidden-sm hidden-xs">
    <div class="container">
        <div class="header-left">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo e(asset('storage/logo/logo.png')); ?>" alt="HowEGoBe" width="168" height="67">
                </a>
            </div>
            <nav class="navi main-nav">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="achievement/listing">LISTING</a></li>
                    
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <?php if(!Auth::guest()): ?>
                <div class="user">
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-rounded btn-default waves-effect"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>  
                        Logout
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" 
                            style="display: none;">
                            <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<div class="header-mobile visible-sm visible-xs">
    <div class="container">
        <!--start mobile nav-->
        <div class="mobile-nav">
            <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
            <div class="nav-dropdown main-nav-dropdown"></div>
        </div>
        <!--end mobile nav-->
        <div class="header-logo">
            <a href="/">
                
                 <img src='<?php echo e(asset("/storage/logo/logo.png")); ?>' alt="logo" width="57" height="268">
            </a>
        </div>
        <div class="header-user">
                <ul class="account-action">
                    <li>
                        <?php if(Auth::guest()): ?>
                            <span class="user-image"><i class="fa fa-ellipsis-v"></i></span>
                        <?php else: ?>
                            <img src="<?php echo e(asset(Auth::user()->smallAvater)); ?>" alt="<?php echo e(Auth::user()->name); ?>" 
                                 class="user-image" width="36" height="36">
                        <?php endif; ?>
                        <div class="account-dropdown">
                            <ul>
                                <?php if(!Auth::guest()): ?>
                                    <li>
                                        <a href="#" class="waves-effect"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"> 
                                            <i class="fa fa-unlock"></i>  
                                            Logout
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
</div>
<!--end header section header v1-->
