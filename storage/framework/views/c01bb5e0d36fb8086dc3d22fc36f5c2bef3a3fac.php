        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>

                        <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="ti-home"></i> <span>Dashboard</span></a></li>
                        <?php if( Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                        <?php if( Auth::user()->role_id == 1 ): ?>
                        <li><a href="<?php echo e(route('admin.house.all')); ?>"><i class="ti-home"></i> <span>All House</span></a></li>
                        <li><a href="<?php echo e(route('house.owner.all')); ?>"><i class="ti-home"></i> <span>All House owner</span></a></li>
                        <li><a href="<?php echo e(route('varati.all')); ?>"><i class="ti-home"></i> <span>All Varati</span></a></li>
                        <li><a href="<?php echo e(route('booking.house.all')); ?>"><i class="ti-home"></i> <span>All Booking House</span></a></li>
                        <li><a href="<?php echo e(route('contact.all')); ?>"><i class="ti-home"></i> <span>Contact</span></a></li>

                        <?php endif; ?>
                        <?php if( Auth::user()->role_id == 2 ): ?>
                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>House</span></a>

                            <ul class="side-header-sub-menu">
                                <li><a href="<?php echo e(route('house.create')); ?>"><span>Add House</span></a></li>
                                <li><a href="<?php echo e(route('house.manage')); ?>"><span>Manage House</span></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('bookig.house.all.house.owner')); ?>"><i class="ti-home"></i> <span>Booking House</span></a></li>
                        <?php endif; ?>

                        <?php endif; ?>
                        <?php endif; ?>


                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End --><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/inc/sidebar.blade.php ENDPATH**/ ?>