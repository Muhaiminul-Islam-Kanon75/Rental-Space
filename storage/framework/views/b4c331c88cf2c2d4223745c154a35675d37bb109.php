

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-heading">
        <h3>Dashboard <span>/ Rent house</span></h3>
    </div>
</div><!-- Page Heading End -->

<!-- Page Button Group Start -->
<div class="col-12 col-lg-auto mb-20">
    <div class="page-date-range">
        <input type="text" class="form-control input-date-predefined">
    </div>
</div><!-- Page Button Group End -->

</div><!-- Page Headings End -->

<!-- Top Report Wrap Start -->
<div class="row">
<!-- Top Report Start -->
<?php if(Auth::user()->role_id == 2): ?>
<?php
$total =   App\Models\House::where('user_id',Auth::user()->id)->count();
$total_booking = App\Models\BookHouseDate::where('house_owner_id',Auth::user()->id)->count();
?>
<div class="col-xlg-6 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total House</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Houses</h5>
            <h2><?php echo e($total); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 92%;"></div>
            </div>
            <!-- <p>92% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<!-- Top Report Start -->
<div class="col-xlg-6 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total Booking</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Total </h5>
            <h2><?php echo e($total_booking); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 98%;"></div>
            </div>
            <!-- <p>98% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<?php elseif(Auth::user()->role_id == 1): ?>
<?php
$total =   App\Models\House::latest()->count();
$total_house_owner =   App\Models\user::latest()->where('role_id',2)->count();
$total_user =   App\Models\user::latest()->where('role_id',3)->count();
$total =   App\Models\House::latest()->count();
$total_booking = App\Models\BookHouseDate::latest()->count();
?>
<div class="col-xlg-3 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total House</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Houses</h5>
            <h2><?php echo e($total); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 92%;"></div>
            </div>
            <!-- <p>92% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<!-- Top Report Start -->
<div class="col-xlg-3 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total Booking</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Total </h5>
            <h2><?php echo e($total_booking); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 98%;"></div>
            </div>
            <!-- <p>98% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<div class="col-xlg-3 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total User</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Total User</h5>
            <h2><?php echo e($total_user); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 92%;"></div>
            </div>
            <!-- <p>92% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<!-- Top Report Start -->
<div class="col-xlg-3 col-md-6 col-12 mb-30">
    <div class="top-report">

        <!-- Head -->
        <div class="head">
            <h4>Total Hosuer Owner</h4>
            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
        </div>

        <!-- Content -->
        <div class="content">
            <h5>Total </h5>
            <h2><?php echo e($total_house_owner); ?></h2>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="progess">
                <div class="progess-bar" style="width: 98%;"></div>
            </div>
            <!-- <p>98% of unique visitor</p> -->
        </div>

    </div>
</div><!-- Top Report End -->
<?php endif; ?>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/backend/index.blade.php ENDPATH**/ ?>