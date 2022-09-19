@extends('layouts.admin')

@section('admin-content')
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
                    @php
                    $i = 1;
                    @endphp
                	@foreach($houses as $house)
                    <tr>
                        <td><a href="{{route('house.single',$house->id)}}">{{$i}}</a></td>
                        <td>{{$house->title}}</td>
                        <td>{{$house->description}}</td>
                        <!-- <td><a href="{{route('bookig.request.house',$house->id)}}">View</a></td> -->
                        <td>
                            <div class="row">
                                <div class="col-3">
                                   <form action="{{route('house.distroy')}}" method="POST">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$house->id}}">
                                        <button class="btn btn-danger zmdi zmdi-delete" type="submit"></button>
                                    
                                    </form> 
                                </div>
                                <div class="col-3">
                                    <a href="{{route('house.edit',$house->id)}}"><i class="btn btn-success zmdi zmdi-edit"></i></a>
                                    
                                </div>
                            </div>
                    		
                            
                        	
                        	
                        	
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