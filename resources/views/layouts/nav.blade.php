<div class="w3-top" style="background-color: #4267b2">
	<div class="w3-bar w3-text-white" style="max-width: 1100px ; margin:0 auto">
		@if(Auth::check())
		<a href="/logout" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right"><b>Logout</b></a>
		<a href="/home" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right"><b>Home</b></a>
		<a href="#" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">
			<img src="/upload/imgs/avatar-default.gif" height="20px">
			<span><b>Hai Nguyen</b></span>
		</a>
		@else
		<a href="/login" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">Login</a>
		<a href="/register" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">Register</a>
		@endif

	    <a href="/home" class="w3-bar-item w3-padding-16 w3-xlarge "><i class="fa fa-facebook-official"></i></a>
	    <a class="w3-bar-item " style="padding-top: 14px;padding-bottom: 14px">
	    	<input type="text" class="w3-input w3-round" style="height: 30px;width: 500px">
	    </a>
	    <a class="w3-bar-item w3-padding-16 w3-large"><i class="fa fa-search"></i></a>
	</div>

</div>