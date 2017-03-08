<div class="w3-top" style="background-color: #4267b2">
	<div class="w3-bar w3-text-white" style="max-width: 1100px ; margin:0 auto">
		@if(Auth::check())

		<form action="{{ route('login.destroy',['id'=>'1']) }}" method="post" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<a href="#" onclick="this.parentNode.submit()" ><b>Logout</b></a>
		</form>

		<a href="{{ route('home') }}" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right"><b>Home</b></a>
		<a href="{{ route('admin') }}" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">
			<img src="{{ Auth::user()->avatar_url	}}" height="20px">
			<span><b>{{ Auth::user()->name }}</b></span>
		</a>
		@else
		<a href="{{ route('login.create')}}" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">Login</a>
		<a href="{{ route('register.create') }}" class="w3-bar-item w3-hover-indigo w3-padding-16 w3-right">Register</a>
		@endif

	    <a href="{{route('home')}}" class="w3-bar-item w3-padding-16 w3-xlarge "><i class="fa fa-facebook-official"></i></a>
	    <a class="w3-bar-item " style="padding-top: 14px;padding-bottom: 14px">
	    	<input type="text" class="w3-input w3-round" style="height: 30px;width: 500px">
	    </a>
	    <a class="w3-bar-item w3-padding-16 w3-large"><i class="fa fa-search"></i></a>

	</div>
</div>

