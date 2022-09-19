

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Category <span>/ Edit</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->
<div class="row mbn-30">

    <!--Default Form Start-->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Category</h4>
            </div>
            <div class="box-body">
                <form method="POST" action="<?php echo e(route('category.update',$category->id)); ?>" enctype="multipart/form-data">
                	<?php echo csrf_field(); ?>
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <label for="formLayoutUsername1">Category Name</label>
                            <input type="text" id="formLayoutUsername1" value="<?php echo e($category->name); ?>" class="form-control" placeholder="Category Name" name="name">
                        </div>
                        <div class="col-12 mb-30">
		                    <div class="box">
		                        <div class="box-head">
		                            <h3 class="title">Category Image</h3>
		                        </div>
		                        <div class="box-body">
		                            <input  type="file" name="image">
		                        </div>
		                    </div>
		                </div>

                        <div class="col-12 mb-20">
                            <input type="submit" value="Update Category" class="button button-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Default Form End-->

</div>
<!-- Plugins & Activation JS For Only This Page -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/dropify/dropify.active.js"></script>
    <script type="text/javascript">
    	FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
		const inputElement = document.querySelector('.file-pond');
		const pond = FilePond.create( inputElement, {
		    imagePreviewHeight: 140,
		});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/backend/category/edit.blade.php ENDPATH**/ ?>