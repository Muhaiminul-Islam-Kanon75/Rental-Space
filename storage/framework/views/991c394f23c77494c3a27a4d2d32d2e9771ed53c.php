

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Password <span>/ Change</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->
<div class="row mbn-30">

    <!--Default Form Start-->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Password</h4>
            </div>
            <div class="box-body">
                <form method="POST" action="<?php echo e(route('update.password')); ?>" enctype="multipart/form-data">
                	<?php echo csrf_field(); ?>
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">Current Password</label>
                            <input type="password" id="formLayoutUsername1" class="form-control"  name="old_password">
                        </div>
                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">New Password</label>
                            <input type="password" id="formLayoutUsername1" class="form-control"  name="new_password">
                        </div>
                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">Confirm New Password</label>
                            <input type="password" id="formLayoutUsername1" class="form-control"  name="password_confirmation">
                        </div>
                        

                        <div class="col-12 mb-20">
                            <input type="submit" value="Save Change" class="button button-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Default Form End-->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/backend/user/changePassword.blade.php ENDPATH**/ ?>