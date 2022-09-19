

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
										<li class="breadcrumb-item active" aria-current="page">Details</li>
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
												<div class="list-group list-group-flush">	<a href="<?php echo e(route('user.dashboard')); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
													
													
													<a href="<?php echo e(route('user.detail')); ?>" class="list-group-item  d-flex justify-content-between align-items-center">Account Details <i class='bx bx-user-circle fs-5'></i></a>
													<a href="<?php echo e(route('user.password')); ?>" class="list-group-item active d-flex justify-content-between align-items-center">Change Password <i class="bx bx-tachometer fs-5"></i></a>
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
										<div class="card shadow-none mb-0 border">
											<div class="card-body">
												<form class="row g-3" action="<?php echo e(route('update.user.password')); ?>" method="POST" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<div class="col-12">
														<label class="form-label">Current Password</label>
														<input type="Password" name="old_password" class="form-control" value="">
													</div>
													<div class="col-12">
														<label class="form-label">New Password</label>
														<input type="Password" name="new_password" class="form-control" value="">
													</div>
													<div class="col-12">
														<label class="form-label">Confirm New Password</label>
														<input type="Password" name="password_confirmation" class="form-control" value="">
													</div>
													
													<div class="col-12">
														<button type="submit" class="btn btn-dark btn-ecomm">Save Changes</button>
													</div>
												</form>
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
<?php echo $__env->make('layouts.fontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/fontend/changePassword.blade.php ENDPATH**/ ?>