<!doctype html>
<html class="no-js" lang="en">

	<head>
		@include('backend.inc.header')
		@include('backend.inc.css')
	</head>
	<body>
		<div class="main-wrapper">
			@include('backend.inc.topbar')
			@include('backend.inc.sidebar')
			<!-- Content Body Start -->
	        <div class="content-body">
	        	@yield('admin-content')
	        </div>
	        
		</div>
		@include('backend.inc.script')
	</body>
</html>