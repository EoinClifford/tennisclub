<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
	<script src="{{asset('js/app.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
		<ul class="nav navbar-nav">
			<li><a href="{{ route('members.index') }}">Member List</a></li>
			<li><a href="{{ route('members.create') }}">New Member</a></li>
			<li><a href="{{ route('bookings.index') }}">Booking List</a></li>
			<li><a href="{{ route('bookings.create') }}">New Booking</a></li>
			<li><a href="{{ route('courts.index') }}">Courts List</a></li>
			<li><a href="{{ route('courts.create') }}">New Court</a></li>
			
		</ul>
		@include('layouts.navAuth')
	</nav>	
	<div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8">
						@yield('content') 
					</div> 
                    <div class="col-lg-2"></div> 
                </div> 
            
</body>
</html>