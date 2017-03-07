@extends('layouts.master')

@section('title','Home')

@section('content')
	
	@if(Auth::check())
	<!-- New Post -->
	<div class="w3-border w3-round">
		
		<form method="post" action="/posts/create" enctype="multipart/form-data">
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

	<!--End New Post -->

	<!-- All Post -->
	@foreach ($posts as $post)
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
		</div>
		@endif
		<!-- End Post Image -->

		<!-- Comment -->
			<div class="w3-container w3-padding-bottom">
				<hr>
				<a href="#" class=""><i class="fa fa-thumbs-o-up"></i>&nbsp;Like</a>&nbsp;
				<a href="#" onclick="showCommentInput();"><i class="fa fa-comment-o"></i>&nbsp;Comment</a>
			@if(Auth::check())	
				@if (Auth::user()->id == $post->user->id || Auth::user()->role_id == 1)
				<a href="/posts/{{ $post->id }}" class="w3-right"><i class="fa fa-edit "></i>&nbsp;Edit</a>
				<a href="/posts/{{ $post->id }}/delete" onclick="confirmbox(event)" class="w3-right"  style="margin-right: 16px"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>&nbsp;
				@endif
			@endif	

				@if(Auth::check())
				<!-- Input Comment -->
				<form class="w3-row w3-margin-top" id="comment" action="/comments/create" method="post" >
					{{csrf_field()}}
					<input type="text" name="post_id" value="{{$post->id}}" hidden>
					<input type="text" name="body" name="comment" placeholder="Your comment is here" class="w3-input w3-twothird w3-border">
					<input type="submit" value="Comment" class="w3-third w3-btn-block w3-light-grey w3-padding-8">
				</form>
				<!-- End Input Comment -->	
				@endif

			</div>

			<!-- Show Comment -->
			
				@foreach ($post->comment as $comment)
				<div class="w3-container w3-padding-4">
					<a href="#" class="w3-text-blue"><b>{{$comment->user->name}}: </b></a>
					<span>{{ $comment->body }}</span>
					@if(Auth::check())
						@if(Auth::user()->id == $comment->user->id || Auth::user()->role_id == 1)
							<a href="/comments/{{$comment->id}}/delete" onclick="confirmbox(event)" class="w3-right"><i class="fa fa-trash-o "></i></a>
						@endif
					@endif
				</div>
				@endforeach
			<!-- End Show Comment -->

		<!-- End Comment -->
	</div>
	<!-- End All Post -->
	@endforeach




@endsection

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }

   function showCommentInput ()
   {

   }
</script>