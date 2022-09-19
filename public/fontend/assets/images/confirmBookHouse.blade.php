
@extends('layouts.fontend')


<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.0/examples/checkout/form-validation.css">

@php 
  $price = (int)$bHouse->house->rent;
  $fdate = strtotime($bHouse->booking_date);
  $tdate = strtotime($bHouse->expired_date);
  $intervel =$tdate - $fdate;
  $intervel = floor($intervel/(60*60*24));
  $intervel = (int)$intervel;
  $totalPrice = (int)$price*$intervel;
  $comission = (float)($totalPrice/100)*2;
  $price_with_commison = $totalPrice + $comission;

@endphp
@section('fontend-content')
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}

  .justify-content-between {
    -webkit-box-pack: justify!important;
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
</style>

<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">Booking </h2>
                <p class="page-description">Booking Confirm</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div><!-- /.page-header -->
<!-- ====== Breadcrumbs Area======= --> 
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                     <a href="{{route('home')}}">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Booking</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->
<div class="container">
    <div class="row">
      <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          
          <form action="{{route('stripe.order')}}" method="post" id="payment-form">
                            @csrf

                            <input type="hidden" name="house_id" value="{{$bHouse->house->id}}">
                            <input type="hidden" name="id" value="{{$bHouse->id}}">
                            <input type="hidden" name="total_rent" value="{{$totalPrice}}">
                            <input type="hidden" name="total_rent_with_commission" value="{{$price_with_commison}}">
                            <input type="hidden" name="commission" value="{{$comission}}">
                            <input type="hidden" name="days" value="{{$intervel}}">
                            <input type="hidden" name="house_owner_id" value="{{$bHouse->user_id}}">
                        <div class="form-row">
                            {{-- <label for="card-element">
                            Credit or debit card
                            </label> --}}
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1 card-element">
                                Credit or debit card
                              </label>
                              <div id="card-element">
                              <!-- A Stripe Element will be inserted here. -->
                                </div>
                              <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <div class="form-check" style="margin-top: 12px;">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                SSLCOMMERZ
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                Cash on delivery
                              </label>
                            </div>
                            
                            
                        </div>
                        <br>
                        <button class="btn btn-primary">Submit Payment</button>
                        </form>
                        <img src="{{asset('fontend/assets/images/ssl.png')}}" class="card-img-top" alt="...">
        </div>
        <div class="col-md-4 order-md-2 mb-4">


          <div class="card" style="width: 18rem;">
            <img src="{{asset($bHouse->house->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$bHouse->house->title}}</h5>
            </div>
            <span class="text-muted">Price Details</span>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row">
                 <table class="table table-striped">
                      
                        <tr>
                          <th scope="row">Total Days</th>
                          <td class="=text-right">{{$intervel}}</td>

                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>{{$totalPrice}}</td>

                        </tr>
                        <tr>
                          <th scope="row">Commision(2%)</th>
                          <td>{{$comission}}</td>
                        </tr>
                        <tr>
                          <th scope="row">Total (Taka)</th>
                          <td>{{$price_with_commison}}</td>
                        </tr>
                      </tbody>
                    </table>
                  
                </div>
              </li>
            </ul>
          </div>
          
        </div>
        
    </div>
</div>
<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51JCzs9JXz4mwbqPLxhH4Ar25QVgtA1IiuDxHFCoOACnX0xxqdLaAUozE7E7wFIhoBZPKybMq3W48GXeDR1egw5OL00OMNSoNp8');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>    
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js" ></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" ></script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js" ></script>
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