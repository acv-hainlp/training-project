@extends('layouts.master')

@section('title','Login')

@section('content')

<form class="w3-container" action="/action_page.php">
	<div class="w3-section">

		<label><b>Email</b></label>
		<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>

		<label><b>Password</b></label>
		<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Password" name="password" required>

		<button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Login</button>
	</div>
</form>

@endsection