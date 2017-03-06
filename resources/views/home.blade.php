@extends('layouts.master')

@section('title','Home')

@section('content')

	<!-- New Post -->
	<div class="w3-border w3-round">
		<form>
			<header class="w3-container w3-padding-8" >
				<span><i class="fa fa-edit"></i>&nbsp Write new post</span>
			</header>

			<textarea class="w3-input w3-border-0" placeholder="Write Something.."></textarea>

			<footer class="w3-container" style="padding-top: 20px">

				<a href="" class=""><i class="fa fa-thumbs-o-up"></i>&nbsp;Like</a>&nbsp;
				<a href=""><i class="fa fa-comment-o"></i>&nbsp;Comment</a>

				<input class="w3-btn w3-blue w3-right w3-small w3-round" type="submit" value="Publish">

				<a href="" id="image-upload" onclick="chooseFile()" class="w3-right w3-text-gray w3-hover-text-blue w3-large w3-padding-right" style="padding-top: 8px"><i class="fa fa-camera"></i></a>

				<input id="fileInput" type="file" class="w3-input" accept="image/*" name="file" style="display: none">
				
			</footer>

		</form>
		
	</div>


	<!--End New Post -->

	<!-- All Post -->
	<div class="w3-panel w3-round w3-border w3-white">
		<div class="w3-container">
			<img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p50x50/15036199_1069914539789139_6878978061916064121_n.jpg?oh=845f6869a3a8a95d56fb6eb26bf9d06e&oe=5939AEC7">
			<span>Hai Nguyen</span>
		</div>
		
	</div>

	<!-- End All Post -->




@endsection

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }
</script>