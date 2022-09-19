
<?php
$houseRC = App\Models\Review::where('house_id',$house->id)->where('status',1)->count();
 $houseRAlls = App\Models\Review::where('house_id',$house->id)->where('status',1)->paginate(1);


$i = 0;
?>
<?php $__currentLoopData = $house->bookHouseDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookHouseDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php 

$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();
?>
<?php if($date < $bookHouseDate->booking_date && $date < $bookHouseDate->expired_date): ?>


 <?php
 	$i++;
 ?>
<?php endif; ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php


$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();
?>
<?php if( Route::has('login')): ?>
    <?php if(auth()->guard()->check()): ?>
    <?php
    	$houseR = App\Models\Review::where('user_id',Auth::user()->id)->where('house_id',$house->id)->where('status',0)->first();
    	
    ?>

    <?php endif; ?>
    <?php endif; ?>
	
	<!-- CSS here -->
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/preloader.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/meanmenu.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/animate.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/owl-carousel.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/backtotop.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/ui-range-slider.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/nice-select.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/flaticon/flaticon.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/default.css">
      <link rel="stylesheet" href="<?php echo e(asset('common')); ?>/assets/css/style.css">
      <script src="<?php echo e(asset('common')); ?>/<?php echo e(asset('common')); ?>/assets/js/vendor/jquery.js"></script>
       <script src="<?php echo e(asset('common')); ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<?php $__env->startSection('fontend-content'); ?>
<!-- ====== Page Header ====== --> 
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">House</h2>
                <p class="page-description">More Details About Apartment</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div><!-- /.page-header -->
<!-- ====== Breadcrumbs Area====== --> 
<div class="breadcrumbs-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="breadcrumbs">
                   <span class="first-item">
                    <a href="<?php echo e(route('home')); ?>">Home</a></span>
                   <span class="separator">&gt;</span>
                   <span class="last-item">Apartment Single Page </span>
               </div>
           </div><!-- /.col-md-12 -->
       </div><!-- /.row -->
   </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->
<!-- ====== Apartments-Single-Area ======= --> 
<div class="apartment-single-area">
  	<div class="container">
	  	<div class="row">
		    <div class="col-md-8">
				<div class="corousel-gallery-content">
					  <div class="gallery">
					       <div class="full-view owl-carousel">
					       	<?php $__currentLoopData = $house->houseImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $houseImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					     	  <a class="item image-pop-up" href="<?php echo e(asset($houseImage->image)); ?>">
					     		  <img src="<?php echo e(asset($houseImage->image)); ?>" alt="corousel">
					     	  </a>
					     	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					     	  
					       </div>

					      <div class="list-view owl-carousel">
					      	<?php $__currentLoopData = $house->houseImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $houseImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					          <div class="item">
					        	  <img src="<?php echo e(asset($houseImage->image)); ?>" alt="corousel-image">
					          </div>
					         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
					      </div>  
					  </div> <!-- /.gallery-two -->
				</div> <!-- /.corousel-gallery-content -->

				<div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                        	
                        	
                        	
                        	
    					   <h3 class="apartment-title"><?php echo e($house->title); ?></h3>
                        </div><!-- /.tb-cell -->
                        <div class="tb-cell">
    					   <p class="pull-right rent">Rent/Day: ৳<?php echo e($house->rent); ?></p>
                        </div><!-- /.tb-cell -->
                    </div><!-- /.tb -->
					<div class="clearfix"></div><!-- /.clearfix -->
					<p class="apartment-description default-gradient-before"><?php echo e($house->description); ?></p>
					<div class="price-details">
						<h3>Price Details-</h3>
						<ul>
							<li><span>Rent: </span> ৳<?php echo e($house->rent); ?></li>
							<!-- <li><span>Service Charge :</span> <?php echo e($house->service_charge); ?></li>
							<li><span>Security Deposit :</span> <?php echo e($house->security_deposit); ?></li>
							<li><span>Flat Release Policy :</span> <?php echo e($house->flat_release_policy); ?></li> -->
						</ul>
					</div><!-- /.price -->

					<div class="property-details">
						<h3>Property Details-</h3>
						<ul>
							<li><span>Address  &amp; Area :</span> <?php echo e($house->address); ?></li>
							<li><span>Flat Size :</span> <?php echo e($house->flat_size); ?></li>
							<li><span>Floor :</span> <?php echo e($house->floor); ?></li>
							<li><span>Room Category :</span> <?php echo e($house->room_category); ?></li>
							<li><span>Facilities :</span> <?php echo e($house->facilities); ?></li>
							<li><span>Booking House :</span> 
								<table class="table">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col">#Si</th>
								      <th scope="col">Booking Date</th>
								      <th scope="col">Expired Date</th>
								      
								    </tr>
								  </thead>
								  <tbody>
								  	<?php
								  		$i = 1;
								  	?>
								  	<?php $__currentLoopData = App\Models\BookHouseDate::latest()->where('house_id',$house->id)->where('expired_date','>',$date)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookingDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								    <tr>
								      <th scope="row"><?php echo e($i); ?></th>
								      <td><?php echo e($bookingDate->booking_date); ?></td>
								      <td><?php echo e($bookingDate->expired_date); ?></td>
								      
								    </tr>
								    <?php
								  		$i++;
								  	?>
								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </tbody>
								</table>
							 </li>
						</ul>
					</div><!-- /.Property -->
					
					<div class="indoor-features">
						<div class="row">
							<div class="col-md-6">
								<h3 class="features-title">Review</h3>
								
							</div><!-- /.col-md-6 -->
							
						</div><!-- /.row -->
					</div><!-- /.indoor -->
				</div><!-- /.family-apartment-content -->
                <div class="hidden-md hidden-lg text-center extend-btn">
                    <span class="extend-icon">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </div>
                
	                <div class="product__details-review">
	                    <div class="row">
	                        <div class="col-xl-4">
	                            <div class="review-rate">
	                                <h5><?php echo e($house->average_rating); ?></h5>
	                                <div class="review-star">
	                                	<?php if($house->average_rating === 5): ?>
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	<?php elseif($house->average_rating === 4): ?>
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	<?php elseif($house->average_rating === 3): ?>
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	<?php elseif($house->average_rating === 2): ?>
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	<?php elseif($house->average_rating === 1): ?>
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                	<?php else: ?>

	                                    
	                                    <?php endif; ?>
	                                </div>
	                                <span class="review-count"><?php echo e($houseRC); ?> Review</span>
	                            </div>
	                        </div>
	                        <?php if($houseRAlls): ?>
	                        <?php $__currentLoopData = $houseRAlls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $houseRAll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        <div class="col-xl-8">
	                            <div class="review-des-infod">
	                                

	                                <div class="review-details-des">
	                                    <div class="author-image mr-15">
	                                        <a href="#"><img src="<?php echo e(asset($house->user->image)); ?>" style="width:50px;height: 50px;" alt=""></a>
	                                    </div>
	                                    <div class="review-details-content">
	                                        <div class="str-info">
	                                            <div class="review-star mr-15">
	                                                <?php if($houseRAll->rating === 5): ?>
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	<?php elseif($houseRAll->rating === 4): ?>
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	<?php elseif($houseRAll->rating === 3): ?>
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	<?php elseif($houseRAll->rating === 2): ?>
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	<?php elseif($houseRAll->rating === 1): ?>
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                	<?php else: ?>

				                                    
				                                    <?php endif; ?>
	                                            </div>
	                                            <div class="add-review-option">
	                                                
	                                            </div>
	                                        </div>
	                                        <div class="name-date mb-30">
	                                            <h6> <?php echo e($house->user->name); ?> – <span> <?php echo e($houseRAll->updated_at->format('d-M-Y')); ?></span></h6>
	                                        </div>
	                                        <p><?php echo e($houseRAll->comment); ?></p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                        <div class="d-felx justify-content-center">

					            <?php echo e($houseRAlls->links('pagination::bootstrap-4')); ?>


					        </div>
	                        <?php endif; ?>
	                    </div>
	                    <?php if( Route::has('login')): ?>
    						<?php if(auth()->guard()->check()): ?>
    						<?php if($houseR): ?>
	                    <div class="row">
	                        <div class="col-xl-12">
	                            <div class="product__details-comment ">
	                                <div class="comment-title mb-20">
	                                   <h3>Add a review</h3>
	                                   
	                                </div>
	                                
	                                <div class="comment-input-box">
	                                   <form action="<?php echo e(route('review.store')); ?>" method="POST">
	                                   	<?php echo csrf_field(); ?>
	                                   	<input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
	                                   	<input type="hidden" name="house_id" value="<?php echo e($house->id); ?>">
	                                   	<input type="hidden" name="house_owner_id" value="<?php echo e($house->user_id); ?>">
	                                   	<input type="hidden" name="id" value="<?php echo e($houseR->id); ?>">
	                                      <div class="row">
	                                        
	                                         <div class="col-xxl-6 col-xl-6">
	                                            <div class="comment-input">
	                                            	<label >Rating</label>
	                                               <select name="rating" class="form-control" style="margin-bottom: 50px;">
	                                                	<option value="1">1</option>
													  	<option value="2">2</option>
													  	<option value="3">3</option>
													  	<option value="4">4</option>
													  	<option selected value="5">5</option>
													</select>													  	
	                                            </div>
	                                         </div>
	                                         <div class="col-xxl-12">
	                                               <textarea placeholder="Your review" name="comment" class="comment-input comment-textarea"></textarea>
	                                         </div>
	                                         
	                                         <div class="col-xxl-12">
	                                            <div class="comment-submit">
	                                               <button type="submit" class="cart-btn">Add new Review</button>
	                                            </div>
	                                         </div>
	                                      </div>
	                                   </form>
	                                </div>
	                             </div>
	                        </div>
	                    </div>
	                    <?php endif; ?>
	                    <?php endif; ?>
	                    <?php endif; ?>
	                </div>
	            
		    </div> <!-- /.col-md-8 -->
		    <?php if( Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <?php if( Auth::user()->role_id == 3 ): ?>
			<div class="col-md-4">
                <div class="apartment-sidebar">                    
    				<div class="widget_rental_search clerafix">					
    					<div class="form-border gradient-border">
    						<form action="<?php echo e(route('booking.house')); ?>" method="POST" class="advance_search_query booking-form">
    							<?php echo csrf_field(); ?>
    							<input type="hidden" name="house_id" value="<?php echo e($house->id); ?>">
    							<input type="hidden" name="house_owner_id" value="<?php echo e($house->user_id); ?>">
    							<div class="form-bg seven">
    								<div class="form-content">
                                        <h2 class="form-title">Book This Apartment</h2>
    									<div class="form-group">
    									   <label>Check in</label>
<!--     									   <input type="date" name="booking_date" placeholder="" min="<?php echo e($date); ?>"> -->
<input type="text" name="booking_date" class="daterange" />
    									</div><!-- /.form-group -->
    									<div class="form-group">
                        				<!-- 	<label>Check out</label>
                                            <input type="date" name="expired_date" min="<?php echo e($date); ?>" >
    									</div> -->
    									
    									<div class="form-group">
    									    <label>Family Member</label>
                                            <input type="number" step="1" min="0" max="100" name="member" title="Qty" size="4" class="input-text">
    									</div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Children</label>
                                            <input type="number" step="1" min="0" max="100" name="children"  title="Qty" size="4" class="input-text">
                                        </div><!-- /.form-group -->
    									<div class="form-group">
    									    <label>Your Message</label>
    		                                <textarea name="message" placeholder="Message" class="form-controller"></textarea>
    									</div><!-- /.form-group -->
    									<div class="form-group">
    										<button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
    									</div><!-- /.form-group -->
    								</div><!-- /.form-content -->
    							</div><!-- /.form-bg -->
    						</form> <!-- /.advance_search_query -->
    					</div><!-- /.form-border -->
    				</div><!-- /.widget_rental_search -->

    				<div class="apartments-content seven post clerafix">
    					<div class="image-content">
    						<a href="#"><img class="overlay-image" src="<?php echo e(asset('fontend')); ?>/assets/images/apartment-ad.png" alt="about" /></a>
    					</div><!-- /.image-content -->
    				</div><!-- /.partments-content -->
                </div><!-- /.apartment-sidebar -->
			</div> <!-- .col-md-4 -->
			<?php elseif(Auth::user()->role_id != 3): ?>

			<?php endif; ?>

            <?php endif; ?>
           
            <?php endif; ?>
	  	</div> <!-- /.row -->
  	</div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->
<script type="text/javascript">
	$('.daterange').daterangepicker();
</script>
<?php echo $__env->make('fontend.inc.contactArea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/fontend/singleHouse.blade.php ENDPATH**/ ?>