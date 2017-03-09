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
		text-decoration:none !important
	}

</style>

<body class="w3-light-grey" >
	@include('layouts.nav')
	
	@include('layouts.errors')
	
	<section style="max-width: 1100px; margin: 0 auto;margin-top:70px">
		<div class="w3-row">
			<!-- Sidebar left-->
			<div class="w3-col l3">
				@include('layouts.sidebarleft')
				&nbsp;
			</div>

			<!-- Content -->
			<div class="w3-col l6 ">
				@yield('content')
			</div>

			<!-- Sidebarright -->
			<div class="w3-col l3">
				@include('layouts.sidebarright')
				&nbsp;
			</div>
		</div>


		
	</section>



</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
 	function confirmbox(event){
		var r = confirm("Do you want confirm this action?");
		if (r == false) {
			event.preventDefault();
		}
	}
</script>

@yield('script')
