<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    /*<!-- Bootstrap CSS -->*/
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<style>

html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}



</style>
    <body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-blue w3-large w3-padding" style="z-index:4">
  <a href="/"><span class="w3-right w3-text-white">Home</span></a>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
<br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="{{Auth::user()->avatar_url}}" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Welcome, <strong>{{Auth::user()->name}}</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="/admin/posts" class="w3-padding"><i class="fa fa-eye fa-fw"></i> All Post</a>
  <a href="/admin/users" class="w3-padding"><i class="fa fa-users fa-fw"></i> All User</a>
  <a href="/admin/comments" class="w3-padding"><i class="fa fa-comment fa-fw"></i> All Comment</a>
  <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw"></i> Settings</a><br><br>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<div class="w3-main" style="margin-left:300px;margin-top:43px;">
			@yield('content')
		</div>

</div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         <!-- App scripts -->
        @stack('scripts')

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
