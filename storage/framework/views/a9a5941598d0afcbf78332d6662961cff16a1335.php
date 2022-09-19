
<?php


$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();
?>
	<!-- Bootstrap CSS -->
	<link href="<?php echo e(asset('user')); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('user')); ?>/assets/css/app.css" rel="stylesheet">
	<link href="<?php echo e(asset('user')); ?>/assets/css/icons.css" rel="stylesheet">
<?php $__env->startSection('fontend-content'); ?>
<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">My Account</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Account</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-4">
					<div class="container">
						<h3 class="d-none">Account</h3>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4">
										<div class="card shadow-none mb-3 mb-lg-0 border rounded-0">
											<div class="card-body">
												<div class="list-group list-group-flush">	<a href="<?php echo e(route('user.dashboard')); ?>" class="list-group-item active d-flex justify-content-between align-items-center">Dashboard <i class="bx bx-tachometer fs-5"></i></a>
													<a href="<?php echo e(route('user.detail')); ?>" class="list-group-item  d-flex justify-content-between align-items-center">Account Details <i class='bx bx-user-circle fs-5'></i></a>
													
													<a href="<?php echo e(route('user.password')); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Change Password <i class="bx bx-credit-card fs-5"></i></a>
													<a href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
                                                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
				                                        <?php echo csrf_field(); ?>
				                                    </form>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="card shadow-none mb-0">
											<div class="card-body">
												<table class="table">
												  <thead class="thead-dark">
												    <tr>
												      <th scope="col">#</th>
												      <th scope="col">Booking Date</th>
												      <th scope="col">Experied Date</th>
												      <th scope="col">Total Rent</th>
												      <th scope="col">Days</th>
												     <!--  <th scope="col">Cancel Request</th> -->
												    </tr>
												  </thead>
												  <tbody>
												  	<?php
												    	$i = 1;
												    	?>
												    	<?php $__currentLoopData = $bookHouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookHouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												    <tr>
												    	
												      <th scope="row"><?php echo e($i); ?></th>
												      <td><?php echo e($bookHouse->booking_date); ?></td>
												      <td><?php echo e($bookHouse->expired_date); ?></td>
												      <td><?php echo e($bookHouse->total_rent); ?></td>
												      <td><?php echo e($bookHouse->days); ?></td>

												      <?php if($bookHouse->booking_date >= $date): ?>
												      <!-- <td>
												      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($bookHouse->id); ?>" data-whatever="@mdo">Request</button>
														<div class="modal fade" id="exampleModal<?php echo e($bookHouse->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														  <div class="modal-dialog" role="document">
														    <div class="modal-content">
														      <div class="modal-header">
														        <h5 class="modal-title" id="exampleModalLabel">Cancel Request</h5>
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														      </div>
														      <div class="modal-body">
														        <form>
														          
														          <div class="form-group">
														            <label for="message-text" class="col-form-label">Message:</label>
														            <textarea class="form-control" id="message-text"></textarea>
														          </div>
														        </form>
														      </div>
														      <div class="modal-footer">
														        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														        <button type="button" class="btn btn-primary">Save Changes</button>
														      </div>
														    </div>
														  </div>
														</div>
												  	</td>
 -->												      <?php endif; ?>
												      <?php
												      $i++;
												      ?>
												      
												    </tr>
												    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												  </tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('user')); ?>/assets/js/app.js"></script>

	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('user')); ?>/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?php echo e(asset('user')); ?>/assets/js/jquery.min.js"></script>

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php echo $__env->make('layouts.fontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/fontend/myAccount.blade.php ENDPATH**/ ?>