<!doctype html>
<html class="no-js" lang="en">

	<head>
		<?php echo $__env->make('fontend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('fontend.inc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<body>
		<?php echo $__env->make('fontend.inc.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- Content Body Start -->
        <?php echo $__env->yieldContent('fontend-content'); ?>
        
		<?php echo $__env->make('fontend.inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/layouts/fontend.blade.php ENDPATH**/ ?>