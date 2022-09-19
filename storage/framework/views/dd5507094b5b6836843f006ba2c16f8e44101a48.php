

<?php $__env->startSection('admin-content'); ?>
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">Contact <span>/ All</span></h3>
	    </div>
	</div><!-- Page Heading End -->
</div><!-- Page Headings End -->
<div class="row">

    <!--Default Data Table Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Contact All</h3>
            </div>
            <div class="box-body">

                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                        	<th>#si</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Website Url</th>
                            <th>Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
                    	$i = 1;
                    	?>
                    	<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($contact->name); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->website); ?></td>
                            <td><?php echo e($contact->message); ?></td>
                        </tr>
                        <?php
                        $i++;
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/backend/Contact/all.blade.php ENDPATH**/ ?>