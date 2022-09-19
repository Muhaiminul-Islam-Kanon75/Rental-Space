<!doctype html>
<html class="no-js" lang="en">

	<head>
		<?php echo $__env->make('backend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('backend.inc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<body>
		<div class="main-wrapper">
			<?php echo $__env->make('backend.inc.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('backend.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- Content Body Start -->
	        <div class="content-body">
	        	<?php echo $__env->yieldContent('admin-content'); ?>
	        </div>
	        
		</div>
		<?php echo $__env->make('backend.inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/layouts/admin.blade.php ENDPATH**/ ?>