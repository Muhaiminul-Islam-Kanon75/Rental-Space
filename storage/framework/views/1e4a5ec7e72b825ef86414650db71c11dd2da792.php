

<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">Manage <span>/ Category</span></h3>
	    </div>
	</div><!-- Page Heading End -->
</div><!-- Page Headings End -->
<div class="row">

<!--Default Data Table Start-->
<div class="col-12 mb-30">
    <div class="box">
        <div class="box-head">
            <h3 class="title">Default Table</h3>
        </div>
        <div class="box-body">

            <table class="table table-bordered data-table data-table-default">
                <thead>
                    <tr>
                        <th>#si</th>
                        <th>Title</th>
                        <th>Description</th>
                        <!-- <th>Booking Request</th> -->
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                	<?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('house.single',$house->id)); ?>"><?php echo e($i); ?></a></td>
                        <td><?php echo e($house->title); ?></td>
                        <td><?php echo e($house->description); ?></td>
                        <!-- <td><a href="<?php echo e(route('bookig.request.house',$house->id)); ?>">View</a></td> -->
                        <td>
                            <div class="row">
                                <div class="col-3">
                                   <form action="<?php echo e(route('house.distroy')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($house->id); ?>">
                                        <button class="btn btn-danger zmdi zmdi-delete" type="submit"></button>
                                    
                                    </form> 
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo e(route('house.edit',$house->id)); ?>"><i class="btn btn-success zmdi zmdi-edit"></i></a>
                                    
                                </div>
                            </div>
                    		
                            
                        	
                        	
                        	
                        	<!-- <i class="fa fa-pencil-square-o">
                        		
                        	</i><i class="zmdi zmdi-delete"></i> --></td>
                        
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/backend/HouseOwner/house/index.blade.php ENDPATH**/ ?>