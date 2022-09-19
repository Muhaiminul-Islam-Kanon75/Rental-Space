@extends('layouts.fontend')
@php
$houseRC = App\Models\Review::where('house_id',$house->id)->where('status',1)->count();
 $houseRAlls = App\Models\Review::where('house_id',$house->id)->where('status',1)->paginate(1);


$i = 0;
@endphp
@foreach($house->bookHouseDates as $bookHouseDate)
@php 

$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();
@endphp
@if($date < $bookHouseDate->booking_date && $date < $bookHouseDate->expired_date)


 @php
 	$i++;
 @endphp
@endif


@endforeach
@php


$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();
@endphp
@if( Route::has('login'))
    @auth
    @php
    	$houseR = App\Models\Review::where('user_id',Auth::user()->id)->where('house_id',$house->id)->where('status',0)->first();
    	
    @endphp

    @endif
    @endif
	
	<!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/preloader.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/bootstrap.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/meanmenu.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/animate.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/owl-carousel.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/backtotop.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/ui-range-slider.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/nice-select.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/flaticon/flaticon.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/default.css">
      <link rel="stylesheet" href="{{ asset('common') }}/assets/css/style.css">
      <script src="{{ asset('common') }}/{{ asset('common') }}/assets/js/vendor/jquery.js"></script>
       <script src="{{ asset('common') }}/assets/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

@section('fontend-content')
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
                    <a href="{{route('home')}}">Home</a></span>
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
					       	@foreach($house->houseImages as $houseImage)
					     	  <a class="item image-pop-up" href="{{ asset($houseImage->image) }}">
					     		  <img src="{{ asset($houseImage->image) }}" alt="corousel">
					     	  </a>
					     	  @endforeach
					     	  
					       </div>

					      <div class="list-view owl-carousel">
					      	@foreach($house->houseImages as $houseImage)
					          <div class="item">
					        	  <img src="{{ asset($houseImage->image) }}" alt="corousel-image">
					          </div>
					         @endforeach 
					      </div>  
					  </div> <!-- /.gallery-two -->
				</div> <!-- /.corousel-gallery-content -->

				<div class="family-apartment-content mobile-extend">
                    <div class="tb">
                        <div class="tb-cell">
                        	
                        	
                        	
                        	
    					   <h3 class="apartment-title">{{$house->title}}</h3>
                        </div><!-- /.tb-cell -->
                        <div class="tb-cell">
    					   <p class="pull-right rent">Rent/Day: ৳{{$house->rent}}</p>
                        </div><!-- /.tb-cell -->
                    </div><!-- /.tb -->
					<div class="clearfix"></div><!-- /.clearfix -->
					<p class="apartment-description default-gradient-before">{{$house->description}}</p>
					<div class="price-details">
						<h3>Price Details-</h3>
						<ul>
							<li><span>Rent: </span> ৳{{$house->rent}}</li>
							<!-- <li><span>Service Charge :</span> {{$house->service_charge}}</li>
							<li><span>Security Deposit :</span> {{$house->security_deposit}}</li>
							<li><span>Flat Release Policy :</span> {{$house->flat_release_policy}}</li> -->
						</ul>
					</div><!-- /.price -->

					<div class="property-details">
						<h3>Property Details-</h3>
						<ul>
							<li><span>Address  &amp; Area :</span> {{$house->address}}</li>
							<li><span>Flat Size :</span> {{$house->flat_size}}</li>
							<li><span>Floor :</span> {{$house->floor}}</li>
							<li><span>Room Category :</span> {{$house->room_category}}</li>
							<li><span>Facilities :</span> {{$house->facilities}}</li>
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
								  	@php
								  		$i = 1;
								  	@endphp
								  	@foreach(App\Models\BookHouseDate::latest()->where('house_id',$house->id)->where('expired_date','>',$date)->get() as $bookingDate)
								    <tr>
								      <th scope="row">{{$i}}</th>
								      <td>{{$bookingDate->booking_date}}</td>
								      <td>{{$bookingDate->expired_date}}</td>
								      
								    </tr>
								    @php
								  		$i++;
								  	@endphp
								    @endforeach
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
	                                <h5>{{$house->average_rating}}</h5>
	                                <div class="review-star">
	                                	@if($house->average_rating === 5)
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	@elseif($house->average_rating === 4)
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	@elseif($house->average_rating === 3)
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	@elseif($house->average_rating === 2)
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                    <a href="#"><i class="fas fa-star"></i></a>
	                                	@elseif($house->average_rating === 1)
	                                	<a href="#"><i class="fas fa-star"></i></a>
	                                	@else

	                                    
	                                    @endif
	                                </div>
	                                <span class="review-count">{{$houseRC}} Review</span>
	                            </div>
	                        </div>
	                        @if($houseRAlls)
	                        @foreach($houseRAlls as $houseRAll)
	                        <div class="col-xl-8">
	                            <div class="review-des-infod">
	                                

	                                <div class="review-details-des">
	                                    <div class="author-image mr-15">
	                                        <a href="#"><img src="{{asset($house->user->image)}}" style="width:50px;height: 50px;" alt=""></a>
	                                    </div>
	                                    <div class="review-details-content">
	                                        <div class="str-info">
	                                            <div class="review-star mr-15">
	                                                @if($houseRAll->rating === 5)
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	@elseif($houseRAll->rating === 4)
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	@elseif($houseRAll->rating === 3)
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	@elseif($houseRAll->rating === 2)
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                    <a href="#"><i class="fas fa-star"></i></a>
				                                	@elseif($houseRAll->rating === 1)
				                                	<a href="#"><i class="fas fa-star"></i></a>
				                                	@else

				                                    
				                                    @endif
	                                            </div>
	                                            <div class="add-review-option">
	                                                
	                                            </div>
	                                        </div>
	                                        <div class="name-date mb-30">
	                                            <h6> {{$house->user->name}} – <span> {{$houseRAll->updated_at->format('d-M-Y')}}</span></h6>
	                                        </div>
	                                        <p>{{$houseRAll->comment}}</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                        <div class="d-felx justify-content-center">

					            {{ $houseRAlls->links('pagination::bootstrap-4') }}

					        </div>
	                        @endif
	                    </div>
	                    @if( Route::has('login'))
    						@auth
    						@if($houseR)
	                    <div class="row">
	                        <div class="col-xl-12">
	                            <div class="product__details-comment ">
	                                <div class="comment-title mb-20">
	                                   <h3>Add a review</h3>
	                                   
	                                </div>
	                                
	                                <div class="comment-input-box">
	                                   <form action="{{route('review.store')}}" method="POST">
	                                   	@csrf
	                                   	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	                                   	<input type="hidden" name="house_id" value="{{$house->id}}">
	                                   	<input type="hidden" name="house_owner_id" value="{{$house->user_id}}">
	                                   	<input type="hidden" name="id" value="{{$houseR->id}}">
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
	                    @endif
	                    @endif
	                    @endif
	                </div>
	            
		    </div> <!-- /.col-md-8 -->
		    @if( Route::has('login'))
                @auth
                @if( Auth::user()->role_id == 3 )
			<div class="col-md-4">
                <div class="apartment-sidebar">                    
    				<div class="widget_rental_search clerafix">					
    					<div class="form-border gradient-border">
    						<form action="{{route('booking.house')}}" method="POST" class="advance_search_query booking-form">
    							@csrf
    							<input type="hidden" name="house_id" value="{{$house->id}}">
    							<input type="hidden" name="house_owner_id" value="{{$house->user_id}}">
    							<div class="form-bg seven">
    								<div class="form-content">
                                        <h2 class="form-title">Book This Apartment</h2>
    									<div class="form-group">
    									   <label>Check in</label>
<!--     									   <input type="date" name="booking_date" placeholder="" min="{{$date}}"> -->
<input type="text" name="booking_date" class="daterange" />
    									</div><!-- /.form-group -->
    									<div class="form-group">
                        				<!-- 	<label>Check out</label>
                                            <input type="date" name="expired_date" min="{{$date}}" >
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
    						<a href="#"><img class="overlay-image" src="{{asset('fontend')}}/assets/images/apartment-ad.png" alt="about" /></a>
    					</div><!-- /.image-content -->
    				</div><!-- /.partments-content -->
                </div><!-- /.apartment-sidebar -->
			</div> <!-- .col-md-4 -->
			@elseif(Auth::user()->role_id != 3)

			@endif

            @endif
           
            @endif
	  	</div> <!-- /.row -->
  	</div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->
<script type="text/javascript">
	$('.daterange').daterangepicker();
</script>
@include('fontend.inc.contactArea')
@endsection