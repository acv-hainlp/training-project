@extends('layouts.master')

@section('title','Home')

@section('content')
	
	@if(Auth::check())
	<!-- New Post -->
	<div class="w3-border w3-round">
		
		<form method="post" action="{{ route('posts.store')}} " enctype="multipart/form-data">

			{{csrf_field()}}
			<header class="w3-container w3-padding-16" >
				<span><i class="fa fa-edit"></i>&nbsp Write new post</span>
			</header>

			<textarea class="w3-input w3-border-0" placeholder="Write Something.." name="body"></textarea>

			<footer class="w3-container w3-display-container" style="padding-top: 20px">


					<input class="w3-btn w3-blue w3-right w3-small w3-round" type="submit" value="Publish">

					<a href="#" id="image-upload" onclick="chooseFile()" class="w3-right w3-text-gray w3-hover-text-blue w3-large w3-padding-right" style="padding-top: 8px"><i class="fa fa-camera"></i></a>

					<input id="fileInput" type="file" class="w3-input" accept="image/*" name="image" style="display: none">
			</footer>
		</form>
		
		
	</div>
	@endif


	<!-- All Post -->
	@foreach ($posts as $post)
		@include('posts.post',['post'=>$post])
	@endforeach

@endsection
