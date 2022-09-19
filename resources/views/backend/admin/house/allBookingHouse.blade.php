@extends('layouts.admin')

@section('admin-content')
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">All <span>/ Booking House</span></h3>
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
                        <th>Total rent</th>
                        <th>Tansection id</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                	@foreach($allBookingHouses as $bookHouse)
                    @php
                    $house = App\Models\House::where('id',$bookHouse->house_id)->first();
                    @endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td><a href="{{route('house.single',$house->id)}}">{{$house->title}}</a></td>
                        <td>{{$bookHouse->booking_date}}</td>
                        <td>{{$bookHouse->expired_date}}</td>
                        <td>{{$bookHouse->total_rent}}</td>
                        <td>{{$bookHouse->days}}</td>
                        <td>{{$bookHouse->commission}}</td>
                        <td>{{$bookHouse->total_rent_with_commission}}</td>
                        <td>{{$bookHouse->transaction_id}}</td>
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