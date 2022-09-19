@extends('layouts.admin')

@section('admin-content')
<div class="row justify-content-between align-items-center mb-10">

	<!-- Page Heading Start -->
	<div class="col-12 col-lg-auto mb-20">
	    <div class="page-heading">
	        <h3 class="title">Contact <span>/ All</span></h3>
	    </div>
	</div><!-- Page Heading End -->
</div><!-- Page Headings End -->
<div class="row">

    <!--Default Data Table Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Contact All</h3>
            </div>
            <div class="box-body">

                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                        	<th>#si</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Website Url</th>
                            <th>Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	@php
                    	$i = 1;
                    	@endphp
                    	@foreach($contacts as $contact)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->website}}</td>
                            <td>{{$contact->message}}</td>
                        </tr>
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