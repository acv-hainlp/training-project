@extends('layouts.master')

@section('title','Edit Post')

@section('content')

	<div class="w3-margin-top w3-round w3-border w3-white">
		<div class="w3-bar">
			<a class="w3-bar-item" style="padding-top: 20px">
				<img src="{{$post->user->avatar_url}}" height="50px">
			</a>
			<a class="w3-bar-item" style="padding-top: 20px" >
				<span><b>{{$post->user->name}}</b></span><br>
				<span><i>{{ $post->created_at->diffForHumans() }}</i></b></span>
			</a>
		</div>
		<div class="w3-container">
			<p>{{ $post->body }}</p>
		</div>

		<!-- Post Image -->
		@if($post->post_image)
		<div class="w3-container" >
			<img src="{{ $post->post_image }}" width="100%">
		</div><br>
		@endif
		<!-- End Post Image -->

			
		<div class="w3-border w3-round">
		<form method="post" action="/posts/{{$post->id}}/edit">
		
			{{csrf_field()}}

			<textarea class="w3-input w3-border w3-border-0" placeholder="Write Something.." name="body"></textarea>

			<footer class="w3-container w3-display-container w3-padding-4" >
			<input class="w3-btn w3-blue w3-right w3-small w3-round" type="submit" value="Update">
			</footer>
		</form>

@endsection