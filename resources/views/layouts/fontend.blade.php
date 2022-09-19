<!doctype html>
<html class="no-js" lang="en">

	<head>
		@include('fontend.inc.header')
		@include('fontend.inc.css')
	</head>
	<body>
		@include('fontend.inc.topbar')
		<!-- Content Body Start -->
        @yield('fontend-content')
        
		@include('fontend.inc.script')
	</body>
</html>