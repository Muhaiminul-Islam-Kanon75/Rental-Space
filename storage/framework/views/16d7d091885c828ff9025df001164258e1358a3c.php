

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">All <span>/ House</span></h3>
	    </div>
	</div><!-- Page Heading End -->
</div><!-- Page Headings End -->
<div class="row">

<!--Default Data Table Start-->
<div class="col-12 mb-30">
    <div class="box">
        <div class="box-head">
            <h3 class="title"></h3>
        </div>
        <div class="box-body">

            <table class="table table-bordered data-table data-table-default">
                <thead>
                    <tr>
                        <th>#si</th>
                        <th>House Name</th>
                        <th>Booking Date</th>
                        <th>Expired date</th>
                        <th>Rent</th>
                        <th>Days</th>
                        <th>Commission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                	<?php $__currentLoopData = $bookHouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookHouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $house = App\Models\House::where('id',$bookHouse->house_id)->first();
                    ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><a href="<?php echo e(route('house.single',$house->id)); ?>"><?php echo e($house->title); ?></a></td>
                        <td><?php echo e($bookHouse->booking_date); ?></td>
                        <td><?php echo e($bookHouse->expired_date); ?></td>
                        <td><?php echo e($bookHouse->total_rent); ?></td>
                        <td><?php echo e($bookHouse->days); ?></td>
                        <td><?php echo e($bookHouse->commission); ?></td>
                    </tr>
                    <?php
                    $i++;
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
            </table>

        </div>
    </div>
</div>
<!--Default Data Table End-->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/HouseOwner/bookHouse/all.blade.php ENDPATH**/ ?>