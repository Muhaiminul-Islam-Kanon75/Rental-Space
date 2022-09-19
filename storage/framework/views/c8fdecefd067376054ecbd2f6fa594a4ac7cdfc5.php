

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Profile <span>/ Update</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->
<div class="row mbn-30">

    <!--Default Form Start-->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Profle</h4>
            </div>
            <div class="box-body">
                <form method="POST" action="<?php echo e(route('update.profile')); ?>" enctype="multipart/form-data">
                	<?php echo csrf_field(); ?>
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">Name</label>
                            <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Name" name="name" value="<?php echo e($user->name); ?>">
                        </div>
                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">Phone</label>
                            <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Phone" name="phone" value="<?php echo e($user->phone); ?>">
                        </div>
                        
                        <div class="col-12 mb-30">
		                    <div class="box">
		                        <div class="box-head">
		                            <h3 class="title">Thumbnail</h3>
		                        </div>
		                        <div class="box-body">
		                            <input  type="file" name="image" accept="image/*">
		                        </div>
		                    </div>
		                </div>
                        
                        <div class="col-12 mb-20">
                            <input type="submit" value="Update Profile" class="button button-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Default Form End-->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/user/edit.blade.php ENDPATH**/ ?>