    <!-- ====== Header Mobile Area ====== -->
    <header class="mobile-header-area bg-nero hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 tb">
                    <div class="mobile-header-block">
                        <div class="menu-area tb-cell">
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg">
                                <div class="menucontent overlaybg"></div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                    <span id="menu-marker"></span>
                                </div><!--/.menuexpandermain-->
                                <div id="mobile-main-nav" class="main-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        <div class="left-content">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.left-content -->
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.menu-area -->
                        <div class="logo-area tb-cell">
                            <div class="site-logo">
                                <a href="<?php echo e(route('home')); ?>">
                                    <img src="<?php echo e(asset('fontend')); ?>/assets/images/logo.png" alt="site-logo" />
                                </a>
                            </div><!-- /.site-logo -->
                        </div><!-- /.logo-area -->
                        <div class="search-block tb-cell">
                            <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                        </div><!-- /.search-block -->
                        <div class="additional-content tb-cell">
                            <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                        </div><!-- /.additional-content -->
                    </div><!-- /.mobile-header-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.mobile-header-area --> 

    <!-- ====== Header Top Area ====== -->
    <header class="header-area bg-nero hidden-xs hidden-sm">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-md-7 col-sm-7 mobile-center">
                        <div class="site-logo">
                            <a href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(asset('fontend')); ?>/assets/images/logo.png" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-5 col-sm-5 mobile-center">
                        <div class="left-content">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                </li>
                                <?php if( Route::has('login')): ?>
                                <?php if(auth()->guard()->check()): ?>
                                <?php if( Auth::user()->role_id == 3 ): ?>
                                <li>
                                    <a href="<?php echo e(route('user.dashboard')); ?>">My Accout</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo e(route('user.dashboard')); ?>"><img style="height:30px;width: 30px; border-radius: 50%;" src="<?php echo e(asset(Auth::user()->image)); ?>"></a>
                                </li>
                                <?php endif; ?>
                                <?php if( Auth::user()->role_id != 3 ): ?>
                                <li>
                                    <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"">Logout</a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </li>
                                <?php endif; ?>
                                <?php else: ?>
                                <li>
                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                                <!-- <li>
                                    <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                                </li> -->
                                <li>
                                    <a href="#" class="trigger-overlay"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->
    <header class="header-bottom-content bg-nero hidden-xs hidden-sm">
        <div class="container">        
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a href="<?php echo e(route('home')); ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('house.all')); ?>">All Apartment</a>
                                    </li>
                                    
                                    <li>
                                        
                                    </li>
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation --> 
                </div><!-- /.col-md-10 -->

                <div class="col-md-2 col-sm-2">
                    <div class="booking">
                        <span><a href="<?php echo e(route('contact')); ?>">Contact</a></span>
                    </div><!-- /.Booking -->
                </div><!-- /.col-md-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-content --> 

    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->  

        <!-- Registrar Or Sign In-content -->
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Sign in</a></li>
                    <li><a href="#0">New account</a></li>
                </ul>

                <!-- log in form -->
                <div id="cd-login"> 
                    <form class="cd-form"method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" name="email" value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="cd-error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" name="password">
                            <a href="#0" class="hide-password">Hide</a>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="cd-error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </p>

                        <!-- <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Remember me</label>
                        </p> -->

                        <p class="fieldset">
                            <button class="full-width submit-btn" type="submit" class="btn btn-primary"> LOGIN </button>
                        </p>
                    </form>
                    
                    <!-- <p class="cd-form-bottom-message">
                        <a href="#0">Forgot your password?</a>
                    </p>
 -->                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-login -->

                <!-- sign up form -->
                <div id="cd-signup">
                    <form class="cd-form" method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Name</label>
                            <input class="full-width has-padding has-border" id="signup-username"name="name" required type="text" placeholder="Name">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail"name="email" required autocomplete="email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Division</label>
                            <input class="full-width has-padding has-border" id="signup-username"name="division" required type="text" placeholder="Division">
                            <?php $__errorArgs = ['division'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">District</label>
                            <input class="full-width has-padding has-border" id="signup-username"name="district" required type="text" placeholder="District">
                            <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Area</label>
                            <input class="full-width has-padding has-border" id="signup-username"name="area" required type="text" placeholder="Area/House-No/Road-No">
                            <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <!-- <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Nationnal-id-Card</label>
                            <input class="full-width has-padding has-border" id="signup-username" name="file" required type="file" placeholder="Nationnal-id-Card">
                            <?php $__errorArgs = ['nid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p> -->
                        

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password" required autocomplete="new-password">
                            <a href="#0" class="hide-password">Hide</a>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            <a href="#0" class="hide-password">Hide</a>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input type="radio" for="Howse" name="role_id" value="2" ><label id="Howse" class="ml-1" style="padding-left: 5px;">Howse Owner </label>
                            <input type="radio" name="role_id" for="Varati" value="3"checked="checked">
                            <label class="ml-1"style="padding-left: 5px;" id="Varati">Varati </label>
                        </p>
                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                        </p>

                        <p class="fieldset">
                            <!-- <input class="full-width has-padding" type="submit" value="Create account"> -->
                            <button class="full-width submit-btn" type="submit" class="btn btn-primary"> REGISTER </button>
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->
                
                <!-- reset password form -->
                <div id="cd-reset-password">
                    <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content --><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/fontend/inc/topbar.blade.php ENDPATH**/ ?>