@extends('layouts.master')

@section('title','Home')

@section('content')

	<!-- New Post -->
	<div class="w3-border w3-round">
		<form>
			<header class="w3-container w3-padding-16" >
				<span><i class="fa fa-edit"></i>&nbsp Write new post</span>
			</header>

			<textarea class="w3-input w3-border-0" placeholder="Write Something.."></textarea>

			<footer class="w3-container w3-display-container" style="padding-top: 20px">


					<input class="w3-btn w3-blue w3-right w3-small w3-round" type="submit" value="Publish">

					<a href="" id="image-upload" onclick="chooseFile()" class="w3-right w3-text-gray w3-hover-text-blue w3-large w3-padding-right" style="padding-top: 8px"><i class="fa fa-camera"></i></a>

					<input id="fileInput" type="file" class="w3-input" accept="image/*" name="file" style="display: none">
			</footer>

		</form>
		
	</div>


	<!--End New Post -->

	<!-- All Post -->
	<div class="w3-margin-top w3-round w3-border w3-white">
		<div class="w3-bar">
			<a class="w3-bar-item" style="padding-top: 16px">
				<img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p50x50/15036199_1069914539789139_6878978061916064121_n.jpg?oh=845f6869a3a8a95d56fb6eb26bf9d06e&oe=5939AEC7">
			</a>
			<a class="w3-bar-item" style="padding-top: 16px" >
				<span><b>Hai Nguyen</b></span><br>
				<span><i>2 Hour ago</i></b></span>
			</a>
		</div>
		<div class="w3-container">
			<hr>
			<p>Lorem lipsum emet</p>
		</div>
		<div class="w3-container" >
			<img src="https://www.taylorguitars.com/sites/default/files/TaylorGuitars-browse-acoustic.jpg" width="100%">
		</div>

		<!-- Comment -->
			<div class="w3-container w3-padding-bottom">
				<hr>
				<a href="" class=""><i class="fa fa-thumbs-o-up"></i>&nbsp;Like</a>&nbsp;
				<a href="#" onclick="showCommentInput();"><i class="fa fa-comment-o"></i>&nbsp;Comment</a>
			</div>

			<!-- Input Comment -->
			<form class="w3-container w3-row" id="comment" hidden>
				<input type="text" name="comment" placeholder="Your comment is here" class="w3-input w3-twothird w3-border">
				<input type="submit" value="Comment" class="w3-third w3-btn-block w3-light-grey w3-padding-8">
			</form>
			<!-- End Input Comment -->

			<!-- Show Comment -->
			<div class="w3-container">
				<a href="#" class="w3-text-blue"><b>Hai Nguyen</b></a>
				<p>Comment here Comment here  Comment here Comment hereComment hereComment here</p>
			</div>
				
			<!-- End Show Comment -->

		<!-- End Comment -->
	</div>



	<!-- End All Post -->




@endsection

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }

   function showCommentInput ()
   {
   		$("#comment").show();
   }
</script>