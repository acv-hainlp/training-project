<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	a {
		text-decoration:none
	}

</style>

<body class="w3-light-grey" >
	@include('layouts.nav')

	
	<section style="max-width: 1100px; margin: 0 auto;margin-top:70px">
		<div class="w3-row">
			<!-- Sidebar left-->
			<div class="w3-col l3">
				@include('layouts.sidebarleft')
				none
			</div>

			<!-- Content -->
			<div class="w3-col l6 ">
				@yield('content')
			</div>

			<!-- Sidebarright -->
			<div class="w3-col l3">
				@include('layouts.sidebarright')
				
			</div>
		</div>


		
	</section>



</body>
</html>