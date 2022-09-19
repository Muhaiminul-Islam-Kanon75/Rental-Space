        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('fontend')); ?>/assets/images/logo.png" alt="">
                            <img src="<?php echo e(asset('fontend')); ?>/assets/images/logo.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">



                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="avatar">
                                                    <img src="<?php echo e(asset(Auth::user()->image)); ?>" alt="">
                                                    <span class="status"></span>
                                                </span>
                                                <span class="name"><?php echo e(Auth::user()->name); ?></span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#"><?php echo e(Auth::user()->name); ?></a></h5>
                                                <a class="mail" href="#"><?php echo e(Auth::user()->email); ?></a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="<?php echo e(route('edit.profile')); ?>"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="<?php echo e(route('password')); ?>"><i class="zmdi zmdi-account"></i>Change Password</a></li>


                                                </ul>
                                                <ul>

                                                    <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-lock-open"></i>
                                                            Sign out</a>
                                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                            <?php echo csrf_field(); ?>
                                                        </form>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End --><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/inc/topbar.blade.php ENDPATH**/ ?>