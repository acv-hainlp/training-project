<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

	<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>

	<div class="w3-container">
		<h1>Register Form</h1>
		<form id="register" action="#">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input class="w3-input w3-border" type="text" id="name" name="name" placeholder="name">
			<input class="w3-input w3-border" type="text" id="email" name="email" placeholder="email">
			<input class="w3-btn w3-blue w3-margin-top" type="submit" value="Register">	

		</form>


		<div>
			<h2>Get Request</h2>
			<button class="w3-btn w3-orange w3-text-white" id="getRequest">Get Request</button>
		</div>
	</div>

	<div id="getRequestData"></div>
	<div id="postRequestData">asdASDA</div>


</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
	$.ajaxSetup({
		headers: { 
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).ready(function(){ //onload document
		$("#getRequest").click(function() { //when clicj getRequest button
			// $.get('getRequest',function(data){ //send GET request URL getRequest in Router, receive result to data
			// 	$('#getRequestData').append(data); // change contend in <div> id #getRequestData
			// 	console.log(data); //debug data to console
			// })

			$.ajax({
				type: "GET",
				url: "getRequest",
				success: function (data) {
					console.log(data)
				}
			});
		});

		$('#register').submit(function () {
			var name = $('#name').val();
			var email = $('#email').val();

			// $.post('register', {firstname:name, email:email},function (data) {
			// 	$('#postRequestData').html(data);
			// 	console.log(data);
			// });

			var datastring = "name="+name+"&email="+email;
			$.ajax({
				type: "POST",
				url: "register",
				data: datastring,
				success: function (data) {
					console.log(data);
					$("#postRequestData").html(data);
				}
			})
		});



	});

</script>
