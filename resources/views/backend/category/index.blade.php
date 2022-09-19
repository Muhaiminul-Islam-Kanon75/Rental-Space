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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td><img src="{{asset($category->image)}}"></td>
                            <td>
                            	<div class="row">
    	                        	<div class="col-4 col-md-2 col-sm-3 col-lg-2">
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-success fa fa-pencil-square-o"></a>
    	                        		
    	                        	</div>
    	                        	<div class="col-4 col-md-2 col-sm-3 col-lg-2 " style="padding: 0px!important;">
    	                        		<form action="{{route('category.distroy')}}" method="POST">
    	                        			@csrf
    	                        			<input type="hidden" name="id" value="{{ $category->id }}">
    	                        			<button class="btn btn-danger zmdi zmdi-delete" type="submit"></button>
    		                        		
    		                        	</form>
    	                        	</div>	
                            	</div>
                            	
                            	
                            	
                            	<!-- <i class="fa fa-pencil-square-o">
                            		
                            	</i><i class="zmdi zmdi-delete"></i> --></td>
                            
                        </tr>
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