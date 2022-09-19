
<?php $__env->startSection('fontend-content'); ?>
<!-- ====== Page Header ====== --> 
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">House</h2>
                <p class="page-description">All Apartment List</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div><!-- /.page-header -->
<!-- ====== Breadcrumbs Area ====== --> 
<div class="breadcrumbs-area bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                     <a href="<?php echo e(route('home')); ?>">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">house</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->
<!-- ====== Apartments Area ======= --> 
<div class="apartments-area four bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="apartment-tab-area">
                    <ul role="tablist" class="nav nav-tabs apartment-menu hidden-xs hidden-sm">
                        <!-- <li class="active">
                            <a href="#popular-apartment" role="tab" data-toggle="tab">Popular</a>
                        </li> -->
                        <li>
                            <a href="<?php echo e(route('house.new.to.old')); ?>" >Date<span>Newest to oldest</span></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('house.old.to.new')); ?>">Date <span>Older to newest</span> </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('house.new.to.old.price')); ?>">Price<span>Low to high</span></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('house.old.to.new.price')); ?>" >Price<span>high to low</span></a>
                        </li>
                    </ul>
                    <form class="hidden-md hidden-lg">
                        <select class="apartment-menu-mobile">
                            <option value='0'>Popular</option>
                            <option value='1'>Date Newest to oldest</option>
                            <option value='2'>Date Older to newest</option>
                            <option value='3'>Price Low to high </option>
                            <option value='4'>Price high to low</option>
                            <optgroup label="Category">
                                <option value='http://google.com'>Family</option>
                                <option value='6'> Apartment </option>
                                <option value='7'> Contact </option>
                                <option value='8'> Sublet </option>
                                <option value='9'> Bachelor Mess </option>
                                <option value='10'> Office </option>
                            </optgroup>
                        </select>
                    </form>
                    <div class="tab-content">
                        <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                            <div class="row">
                            	<?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="apartments-content">
                                        <div class="image-content">
                                            <a href="<?php echo e(route('house.single',$house->id)); ?>">
                                                <img src="<?php echo e(asset($house->image)); ?>" alt="apartment" />
                                            </a>
                                        </div><!-- /.image-content -->
                                    
                                        <div class="text-content">
                                            <div class="top-content">
                                                <h3>
                                                    <a href="<?php echo e(route('house.single',$house->id)); ?>"><?php echo e($house->title); ?></a>
                                                </h3>
                                               <span>
                                                   <i class="fa fa-map-marker"></i>
                                                   <?php echo e($house->address); ?>

                                               </span> 
                                            </div><!-- /.top-content -->
                                            <div class="bottom-content clearfix">
                                                <div class="meta-bed-room">
                                                    <i class="fa fa-bed"></i> <?php echo e($house->bed_room); ?> Bedrooms
                                                </div>
                                                <div class="meta-bath-room">
                                                    <i class="fa fa-bath"></i><?php echo e($house->bath_room); ?> Bathroom
                                                </div>
                                                <span class="clearfix"></span>
                                                <div class="rent-price pull-left">
                                                    ৳<?php echo e($house->rent); ?> / Day
                                                </div>
                                                <div class="share-meta dropup pull-right">
                                                    <ul>
                                                        <li class="dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.bottom-content -->
                                        </div><!-- /.text-content -->
                                    </div><!-- /.partments-content -->
                                </div><!-- /.col-md-4 -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div><!-- /.row -->
                            <!-- <a href="#" class="more-link default-template-gradient">Load More</a> -->
                        </div><!-- /.popular-apartment -->
                    </div><!-- /.tab-content -->
                </div><!-- /.apartment-tab-area -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.Apartments-area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/fontend/allHouse.blade.php ENDPATH**/ ?>