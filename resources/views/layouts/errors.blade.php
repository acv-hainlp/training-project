@foreach ($errors->all() as $error )
	<div class="w3-bottom w3-red w3-center" style="margin-top:70px">
			<p>{{ $error }}</p>
	</div>
@endforeach
	<div class="w3-bottom w3-red w3-center" id="errors" style="margin-top:70px" hidden>
			<p>Error</p>
	</div>
	
