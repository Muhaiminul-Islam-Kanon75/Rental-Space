@extends('layouts.admin')

@section('admin-content')
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
                        <th>Booking Date</th>
                        <th>Expired date</th>
                        <th>Family Member</th>
                        <th>Children</th>
                        <th>Your Message</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                	@foreach($bookHouses as $bookHouse)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$bookHouse->booking_date}}</td>
                        <td>{{$bookHouse->expired_date}}</td>
                        
                        <td>{{$bookHouse->member}}</td>
                        <td>{{$bookHouse->children}}</td>
                        <td>{{$bookHouse->message}}</td>
                        <td>

                    		<form action="{{route('bookig.request.house.approve')}}" method="POST">
                    			@csrf
                                <input type="hidden" name="id" value="{{$bookHouse->id}}">
                    			<input type="hidden" name="house_id" value="{{$bookHouse->house_id}}">
                    			<button class="btn btn-success" type="submit">Confirm</button>
                        		
                        	</form>
                        	
                        	
                        	
                        	<!-- <i class="fa fa-pencil-square-o">
                        		
                        	</i><i class="zmdi zmdi-delete"></i> --></td>
                        
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
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

@endsection