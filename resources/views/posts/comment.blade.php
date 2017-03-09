

<!-- Comment -->

				@if(Auth::check())
				<!-- Input Comment -->
				<!-- <form class="w3-row w3-margin-top" id="comment" action="{{ route('comments.store')}}" method="post" hidden>
					{{csrf_field()}}
					<input type="text" name="post_id" value="{{$post->id}}" hidden>
					<input type="text" name="body" placeholder="Your comment is here" class="w3-input w3-twothird w3-border">
					<input type="submit" value="Comment" class="w3-third w3-btn-block w3-light-grey w3-padding-8">
				</form> -->
				<!-- End Input Comment -->	

				<!-- Input Comment -->
				<form class="w3-row w3-margin-top" id="comment" action="{{ route('comments.store') }}" onsubmit="commentCreate(event,$(this));" hidden>
					{{csrf_field()}}
					<input type="text" id="post_id" name="post_id" value="{{$post->id}}" hidden>
					<input type="text" id="body" name="body"  placeholder="Your comment is here" class="w3-input w3-twothird w3-border" value="">
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
						<form action="{{ route('comments.destroy', ['id' => $comment->id]) }}" method="post" class="w3-right">
							{{method_field('DELETE')}}
							{{ csrf_field() }}
							<a href="{{ route('posts.destroy',['id'=>$post->id]) }}" onclick="confirmbox(event);this.parentNode.submit()" ><i class="fa fa-trash-o "></i></a>
						</form>	
						@endif
					@endif
				</div>
				@endforeach
			<!-- End Show Comment -->
		<!-- End Comment -->
