<!DOCTYPE html>
<html>
<head>

	<title>login  navabr</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.navbar {
    margin-bottom: 0;
  /* background-color: #292c2f;*/
    background-color: #292c2f;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-weight: bold;
}

.navbar li a, .navbar .navbar-brand {
   
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
   /* color: #6F1EF4 !important;*/
    color: #292c2f !important;
    background-color: #FCFAFF !important;
    font-size: 16px;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
	</style>
	<script>
		$(document).ready(function(){
			$("#navup").click(function(){
				$(".collapse").slideUp("slow");
			});
			$(".navbar .navbar-header").click(function(){
				$(".collapse").slideToggle("slow");
			});
		});
	</script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
					//testing 
				<li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" style="color: black;">
            <li ><a href="#"  style="color: black !important;">Profile</a></li>
            <li><a href="#" style="color: black !important;">Shortlist</a></li>
            <li><a href="#" style="color: black !important;">Logout</a></li>
            
          </ul>
        </li>
					
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>