<div class="w3-margin-top w3-round w3-border w3-white" id="post-{{ $post->id }}">
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
				<div class="w3-container w3-padding-bottom">
				<hr>
				<a href="#" class=""><i class="fa fa-thumbs-o-up"></i>&nbsp;Like</a>&nbsp;
				<a href="#" onclick="showCommentInput(event,$(this));"><i class="fa fa-comment-o"></i>&nbsp;Comment</a>
			@if(Auth::check())	
				@if (Auth::user()->id == $post->user->id || Auth::user()->role_id == 1)
				<!-- <form action="{{ route('posts.destroy',['id'=>$post->id]) }}" method="post" class="w3-right">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<a href="{{ route('posts.show',['id'=>$post->id ])}}" class="w3-right"><i class="fa fa-edit "></i>&nbsp;Edit</a>
					<a href="#"  onclick="confirmbox(event);this.parentNode.submit()" class="w3-right" style="margin-right: 16px"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>&nbsp;</a>
					<!-- <button class="w3-button w3-right" type="submit" onclick="confirmbox(event)">Delete</button> -->
				<!-- </form> -->
					<a href="#" class="w3-right"><i class="fa fa-edit "></i>&nbsp;Edit</a>

					<a href="{{ route('posts.show',['id'=>$post->id ])}}" onclick="deletePost(event,$(this))" data-id="{{ $post->id }}" class="w3-right w3-margin-right" data-token="{{ csrf_token() }}" ><i class="fa fa-trash-o"></i>&nbsp;Delete</a>&nbsp;

				@endif

			@endif	

		@include('posts.comment',['post'=>$post])

			
		<!-- End Post Image -->

		

	</div>
	<!-- End All Post -->