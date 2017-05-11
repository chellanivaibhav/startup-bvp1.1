
<!-- for validating form  -->

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<title>SignUp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="hom.ico" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
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
			 body{
                  overflow-x: hidden;
            }
             .navbar {
    margin-bottom: 0;
   
    background-color: black;
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
   // color: #6F1EF4 !important;
    color: black !important;
    background-color: #FCFAFF !important;
    font-size: 16px;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
			.submitbutton{
				  margin-top: 20px;
                  margin-left: 20px;
                  margin-bottom: 10px;

            }
			.username{
                  font-size: 22px;
                  width: 80%;
                  padding: 12px 0px;
                  margin: 10px 25px;
                  box-sizing: border-box;
                  border: none;
                  border-bottom: 2px solid #ccc;
            }
            .username:focus{
            	 outline: 0;
            }

			.box{
                 
                  margin-bottom: 4%;
                  border: solid;
                  border-radius: 10px;
                  padding-bottom: 1%;
            }
            @media  screen  and (min-width:750px){
            	.box{
            		 margin-top: 10%;
            		 width: 40%;

            	}
            }
             @media  screen  and (min-width:850px){
            	.box{
            		 margin-top: 10%;
            		 width: 33.3%;

            	}
            }
            @media  screen  and (max-width:750px){
            		 .box{
            		 	margin-top: 20%;
            		 }

            }
		</style>
	</head>
	<body>
	<!-- navbar start -->
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
				
					<li><a href="../learning.php">HOME</a></li>
					<li><a href="../signup/signin.php">SIGN IN</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
					<li><a href="#contact">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- navbar ended -->
	<div id="navup"><!-- navup box for navbar -->
		<div class="row container-fluid">
		<div class="col-sm-4">
			
		</div>
		<div class="box col-sm-4">
			<?php 
require 'connToDB.php';
$universal="";
$usernameERR=$passwordERR=$emailERR=$phoneNoERR="";
$username=$password=$email=$phoneNo="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["username"])){
		$usernameERR="Field Cannot Be Left Empty";
	}
	else{
		$username=$_POST["username"];

	}
	if(empty($_POST["email"])){
		$emailERR="Field Cannot Be Left Empty";
	}
	else{
		if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
			$emailERR="Invalid email id";	
		}
		else{
			$email=$_POST["email"];
		}
	}
	if(empty($_POST["phoneNo"])){
		$phoneNoERR="Field Cannot Be Left Empty";
	}
	else{
		if(!is_numeric($_POST["phoneNo"])){
			$phoneNoERR="Invalid Phone Number ";
		}
		else{
			$phoneNo=$_POST["phoneNo"];
		}
	}
	if(empty($_POST["password"])){
		$passwordERR="Field Cannot Be Left Empty";
	}
	else{
		if(strlen($_POST["password"])<=5){
			$passwordERR="Password should be more than 5 characters";
		}
		else{
			$password=$_POST["password"];
		}
	}
	if($usernameERR=="" && $passwordERR=="" && $phoneNoERR=="" && $emailERR==""){

			
			try{
				$sql=$conn->prepare("INSERT INTO user_details(username,user_email,user_password,user_phone_number,user_session_variable) VALUES (?,?,?,?,?)");
				$sql->execute(array($username,$email,$password,$phoneNo,2));
				$universal="succesful";
			}
			catch(PDOexception $e){
				$universal="NOT SUCESSFUL";
			}
		}
	}
	?>
			<?php echo $universal ; ?><br>
			<!-- forms to be styled -->
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"> 
				<input type="text" class="username" name="username" placeholder="username"><?php echo $usernameERR; ?><br>
				<input type="text" class="username" name="email" placeholder="email"><?php echo $emailERR;?><br>
				<input type="text" class="username" name="phoneNo" placeholder="Phone Number"><?php echo $phoneNoERR;?><br>
				<input type="password" class="username" name="password" placeholder="Password"><?php echo $passwordERR;?><br>
				<input type="submit" class="submitbutton btn btn-success btn-lg"  name="signup" value="Sign Up">
			</form>
			<?php  echo $username." ".$password . " ". $email." ". $phoneNo ;?>
		</div>
		<div class="col-sm-4">
			
		</div>
		</div>
		<!-- navbar start -->
		
		<!-- navbar ended -->
		</div><!-- navup box ended -->
	</body>
	</html>