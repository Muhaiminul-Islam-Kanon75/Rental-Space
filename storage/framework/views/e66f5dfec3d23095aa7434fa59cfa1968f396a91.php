<!-- ====== Apartments Area ====== -->
<?php

$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();


?>
<div class="apartments-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">Rooms &amp; </h2>
                    <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = App\Models\House::orderBy('id','desc')->get()->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <a href="<?php echo e(route('house.single',$house->id)); ?>"><img src="<?php echo e(asset($house->image)); ?>" alt="apartment" /></a>
                    </div><!-- /.image-content -->

                    <div class="text-content">
                        <div class="top-content">
                            <h3><a href="<?php echo e(route('house.single',$house->id)); ?>"><?php echo e($house->title); ?></a></h3>
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
                                ৳<?php echo e($house->rent); ?>

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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h1>No House Found!!</h1>
            <?php endif; ?>
        </div><!-- /.row -->
        <a href="<?php echo e(route('house.all')); ?>" class="button nevy-button">All Apartments</a>
    </div><!-- /.container -->
</div><!-- /.Apartments-area--><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/fontend/inc/apartmentArea.blade.php ENDPATH**/ ?>