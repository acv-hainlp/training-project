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

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }

   function showCommentInput(event,obj)
   {	
   		event.preventDefault(); //Stop <a> href action
   		obj.parent().find("#comment").toggle(); // find parent of obj
   }

   function deletePost(event,obj) {
		event.preventDefault(); //Stop <a> href action

		//check user confirm
		var r = confirm("Do you want confirm this action?");
		if (r == false) {
			event.preventDefault(); //if choose no -> stop event
		} else { //if choose yes -> continue

			var id = obj.data("id"); //save data-id value to id, use to html remove
       		var token = obj.data("token"); //save data-token value to token
       		var urlroute = obj.attr("href");

			$.ajax(
	        {
	            url: urlroute,
	            type: 'DELETE',
	            dataType: "JSON",
	            data: {
	                // "id": id, 
	                "_method": 'DELETE',
	                "_token": token,
	            },
	            success: function (msg)
	            {
	            	obj.parents().find("#post-"+id).hide(500,function(){
	            		this.remove(); // find #post-{id} to hide and remove
	            	});
	                console.log(msg); //debug
	            }
	        });	
		}
        
    }

    function commentCreate(event,obj) {
    	event.preventDefault();

    	var post_id = obj.find("#post_id").val();
    	var body = obj.find("#body").val();
    	var token = obj.find("[name=_token]").val();

    	var urlroute = obj.attr("action");

    	$.ajax({
    		url: urlroute,
    		type: 'POST',
    		dataType: "JSON",
    		data: {
    			"body" : body,
    			"post_id" : post_id,
    			"_token" : token,
    		},
    		success: function (msg) 
    		{
    			console.log(msg);
    		}


    	})
    }


   
</script>