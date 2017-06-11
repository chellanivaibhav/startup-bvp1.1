<?php session_start(); 
include('vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty;
if(isset($_SESSION["session_var"])){
		//do nothing for now
		if ($_SESSION["session_var"]==0) 
		{
			 	$smarty->display('templates/navbar_loggedOUT.tpl');

		} 
		else if($_SESSION["session_var"]==1)
		{
			 	$smarty->display('templates/navbar_loggedIN.tpl');
		 	
		}
		  
}
else{

	$_SESSION["session_var"]=0;
	$smarty->display('templates/navbar_loggedOUT.tpl');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>learning</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="home.ico" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="stylelearning.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="letterdrop.css">
	<link rel="stylesheet" type="text/css" href="filter.css">
	<!-- on hold check the naming  -->
	<!-- page refresh at see from top -->
	<script >
		$(document).ready(function(){
			$(this).scrollTop(0);
		});
	</script>
	<!-- input placeholder become heading -->
	<script>
		$(function() {$("body")
			.on("input propertychange", ".form-item",function(e) {
				$(this).toggleClass("form-item-filled",!! $(e.target).val());})
			.on("focus", ".form-item",function() {
				$(this).addClass("form-item-focused");})
			.on("blur", ".form-item",function() {
				$(this).removeClass("form-item-focused");});
		});

	</script>
	<!-- navbar js -->
	<!-- touch  this and i will kill u -->
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
	<style>
		
		/*letter drop  style*/
		
	</style>

	
	<!-- on hold putter  check the proper naming in it -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="80" >

	<!-- navbar start -->
	<!-- <nav class="navbar navbar-default navbar-fixed-top">
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
					<li><a href="signup/signin.php">SIGN IN</a></li>
					<li><a href="php/signup.php">SIGN UP</a></li>
					<li><a href="#">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav> -->
	<!-- navbar ended -->

	<!-- this is the input start form   -->
	<div id="navup"><!-- this is only for navbar id -->
		<div id="yui">
		<h1 style="padding-left: 35px;">company name </h1>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="letter.js"></script>
		  </div>
		<!-- filter buttons -->
		<div class="subfilter" style="padding-top: 100px;">
			<div id="filterup"></div>

			<div id="filter">
				<form action="php/search.php" method="POST">
					<div class="container-fluid1 dropdown btn1">


						<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
							<option value="Any">Gender : Any</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="container-fluid1 btn2">

						<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
							<option value="0">Distance:All</option>

							<option value="3">1-3 km</option>
							<option value="5">3-5 km</option>
							<option value="7">5-7 km</option>
						</select>
					</div>
					<div class="container-fluid1 btn3">


						<select name="Budget" class="btn  btn-responsive xyz" ><!-- xyz for  styling -->
							<option value="0<">Budget : All</option>
							<option value="4<">4000<</option>
							<option value="4+">4000+</option>
							<option value="5+">5000+</option>
						</select>
					</div>
					<div class="container-fluid1 btn4">

						<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >
					</div>
				</form>
			</div>

			<div id="filterdown"></div>
		</div>
		<!-- this is input form end  -->

		<!-- this is what  we make differ -->
		<div style="background-color: #EAE5F1; width: 100%;" class="container-fluid"><!-- background color -->
			<div><!-- difference box-->
				<p class="make_differ_text" style="margin-bottom: 20px">WE MAKE A DIFFERENCE</p>
			</div>
			<div class="row" style="text-align: center;"><!-- make a differ -->
				<div class="col-sm-4 ">
					<p class="differ_text"> Total Saved money</p>
					<div class="differ_border" style="padding-top: 10px">
						<p class="rupee">&#8377;</p>
						<span class="counter differ_no" >23000</span> 
					</div>
				</div>

				<div class="col-sm-4">
					<p class="differ_text">Students</p>
					<div class="differ_border">
						<span class="counter differ_no">1.9583</span>
					</div>
				</div>

				<div class="col-sm-4">
					<p class="differ_text">Year target</p>
					<div class=" differ_border" style="padding-top: 10px">
						<p class="rupee">&#8377;</p>
						<span class="counter differ_no">12345</span>
					</div>
				</div>
			</div> <!-- make a differ -->

			<!-- here what  we make diifer wnd -->





			<!-- testominal  part start-->

			<div><!-- testimonial-->
				<p class="make_differ_text">TESTIMONIAL</p>
			</div>


			<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel start -->
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner text-center" role="listbox">

					<div class="item active">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/125" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p style="text-align: center; font-weight: bold;"> <br> <br>FIRST This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this is <br>helping and right now using is nice .... blah blah annd blah this </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> . . . .</p>
						</div><!-- end text here of testimonal one -->




					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/128" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p style="text-align: center; font-weight: bold;"> <br> <br>SECOND This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> . . . .</p>
						</div><!-- end text here of testimonal one -->



					</div>

					<div class="item">



						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/127" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p style="text-align: center; font-weight: bold;"> <br> <br>THIRD This is good to  use this site , easy to use . <br>provide inf about the lanndlord . This is very good  to use this site . and this is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> . . . .</p>


						</div><!-- end text here of testimonal one -->


					</div>

					<div class="item">


						<div class="col-sm-4">
							<img src="https://placekitten.com/g/125/126" style="border-radius: 50%; border-style: solid;  margin-top: 20px; margin-left: auto; margin-right: auto;">
						</div><!-- end image of testimonal here -->
						<div class="col-sm-6" >
							<p style="text-align: center; font-weight: bold;"> <br> <br>FORTH This is good to  use this site , easy to use . provide inf about the lanndlord . This is very good  to use this site . and this <br> is helping and right now using is nice .... blah blah annd blah  </p>
							<p style="text-align: right; font-weight: bold;"> <br> <br> . . . .</p>
						</div><!-- end text here of testimonal one -->



					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- carousel ended -->

			<!-- testomminal part end -->

		</div><!-- background color ended -->



		<div><!-- why use this-->
			<p class="make_differ_text" style="margin-bottom: 50px;margin-top: 50px;">WHY USE THIS ?</p>
		</div>

		<div class="row text-center slideanim">
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-piggy-bank logo-small"></span>
				<br>
				<h3>FREE</h3>
			</div>
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-search logo-small"></span>
				<br>
				<h3>EASY TO USE</h3>
			</div>
			<div class="col-sm-4  whythis">
				<span class="glyphicon glyphicon-certificate logo-small"></span>
				<br>
				<h3>COLLEGE AFFILIATED</h3>
			</div>
		</div>

		<!-- why use this  end here -->
		<a name="about"></a>

		<div class="row "  style="margin-top: 50px; margin-bottom: 50px;" id="about">
			<div class="col-sm-4 text-center">
				<h3 style="color: black"><b>ABOUT US</b></h3>
			</div>
			<div class="col-sm-8">
				this s dsfskjdf sdkjfbdsjkf sdkfbkjsdf sdkfjbsdjkf sjdf  ddfsdfjsdd sdkjfbsjdkf kffjsdfsd fsddkfjsdfs f sddkfjsddfsd fksddjfsf sdbr	 sdkfb tb btn <br> ddkfjsdf sdkfjbsdjfsd fsdkfjsdf <br> dskfjsddf  dfdskjfsjdkfs  sdskfjsdfsddf ksdjfsdjkfs ffksdjdfsdf dkfjsddfjksdf  sdjfsddjf sddfjksf sdnnv jkd fbr	 > ddkjfbds .
				this s dsfskjdf sdkjfbdsjkf sdkfbkjsdsdkfjbsdjkf sjdfdfsdfjsdd sdkjfbsjdkf kffjsdfsd fsddkfjsdfs f sddkfjsddfsd fksddjfsf sdbr	 sdkfb tb btn df sdkfjbsdjfsd fsdkfjsdf <br> dskfjsddf  dfdskjfsjdkfs  sdskfjsdfsddf ksdjfsdjkfs ffksdjdfsdf dkfjsddfjksdf  sdjfsddjf sddfjksf sdnnv jkd fbr	 <br> ddkjfbds .
				this s dsfskjdf sdkjfbdsjkf sdkfbkjsdf sdkfjbsdjkf sjdf <br> ddfsdfjsdd sdkjfbsjdkf k ddkjfbds .
				this s dsfskjdf sdkjfbdsjkf sdkfbkjsdf sdkfjbsdjkf sjdf <br> ddfsdfjsdd sdkjfbsjdkf kffjsdfsd fsddkfjsdfs f sddkfjsddfsd fksddjfsf sdbr	 sdkfb tb btn <br> ddkfjsdf sdkfjbsdjfsd fsdkfjsdf <br> dskfjsddf  dfdskjfsjdkfs <br> 	 .
			</div>
		</div>

		<!-- contact -->
		<div id="contact">
			<br> <br>
			<div class="row slideanim" >
				<a name="contact"></a>
				<div class="col-md-6 inputcontact" >


					<h3 class="text-center">CONTACT</h3>
					<form>
						<div class="form-item">
							<label for="fname">NAME</label>
							<input type="text" id="fname" name="fname" placeholder="NAME " autocomplete="off" style="outline: 0;">
						</div>
						<div class="form-item">
							<label for="email">EMAIL ID</label>
							<input type="text" id="lname" name="email" placeholder="xyz@abc.com" autocomplete="off" style="outline: 0;">
						</div>
						<div class="form-item">
							<label for="email">MESSAGE</label>
							<textarea placeholder="say something" class="messagetext" autocomplete="off" style="outline: 0;"></textarea>
						</div>
						<div>
							<a href="mailto:tuskibansal@gmail.com"><input type="submit" name="SUBMIT"></a>
						</div>
					</form>
				</div>
				<div class="col-md-6 inputcontact text-center">
					<h3>OUR MOTO</h3> 
					<p>ssdjs sjdsd ssjdhasj ssjdhas  <br> sjd jsadbasd </p>
				</div>
			</div>
		</div>
		<!-- contact end here -->


		<!-- footer start -->
		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/tuskibansal"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/mynetwork/"><i class="fa fa-linkedin"></i></a>
				<a href="https://github.com/anonymous043044/startup-bvp1.1"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#about">About</a>
					·
					<a href="#contact">Contact</a>
					·
					<a href="signup/signin.php">Sign In</a>
					·
					<a href="php/signup.php">Sign Up</a>
					
				</p>

				<p>Company Name &copy; 2017</p>
			</div>

		</footer>
		<!-- footer end  here -->

	</div><!-- navbar id end to  up -->



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 


	<!-- script of what make differ -->
	<script src="jquery.counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});
	</script>
	<!-- script of what make  differ end -->


	<!-- srcipt of easy scroll -->
	<script>$('a[href*="#"]:not([href="#"])').click(function() {
		 if( $(this).attr("href")=="#myCarousel") return;//This is the exception
		 if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		 	var target = $(this.hash);
		 	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		 	if (target.length) {
		 		$('html, body').animate({
		 			scrollTop: target.offset().top
		 		}, 1000);
		 		return false;
		 	}
		 }
		});
	</script>
	<!-- script of easy scroll end -->

	<!-- scroll it above js ( slideanim ) -->

	<script>

		$(window).scroll(function() {
			$(".slideanim").each(function(){
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();

				if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});
	</script>
	<!-- scroll it above js end -->


</body>
</html>