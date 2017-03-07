@foreach ($errors->all() as $error )
	<div class="w3-panel w3-red w3-round">
		{{ $error }}
	</div>
	
@endforeach