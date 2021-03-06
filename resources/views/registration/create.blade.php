@extends('layouts.master')

@section('title','Registration')

@section('content')

<form class="w3-container" action="{{ route('register.store') }}" method="post">
	{{ csrf_field() }}
	<div class="w3-section">
		<label><b>Name</b></label>
		<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="name" required>

		<label><b>Email</b></label>
		<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>

		<label><b>Password</b></label>
		<input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter Password" name="password" required>

		<label><b>Confirm Password</b></label>
		<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password_confirmation" required>

		<button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Register</button>
	</div>
</form>

@endsection