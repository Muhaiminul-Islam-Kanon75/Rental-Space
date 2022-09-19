@extends('layouts.admin')

@section('admin-content')
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">All <span>/ House Owner</span></h3>
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
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                	@foreach($house_owners as $house_owner)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$house_owner->name}}</td>
                        <td>{{$house_owner->email}}</td>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<!--Default Data Table End-->
</div>

@endsection