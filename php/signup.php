<?php session_start();?>
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
	<style>
		body{
			overflow-x: hidden;
		}
		.navbar {
			margin-bottom: 0;
			// background-color: #6F1EF4;
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
			margin-top: 10%;
			margin-bottom: 4%;
			border: solid;
			border-radius: 10px;
			padding-bottom: 1%;
		}
	</style>
</head>
<body>
	<!-- navbar start -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">

					<li><a href="../index.php">HOME</a></li>
					<li><a href="../signup/signin.php">SIGN IN</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
					<li><a href="logout.php">LOG OUT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- navbar ended -->
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
					$sql=$conn->prepare("SELECT * FROM user_details where username='$username'");
					$sql->execute();

					$sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
					if($sqlResult){
						$universal="Username Exists Already ";
					}
					else{
						
						try{

							$sql=$conn->prepare("INSERT INTO user_details(username,user_email,user_password,user_phone_number,user_session_variable) VALUES (?,?,?,?,?)");
							$sql->execute(array($username,$email,$password,$phoneNo,2));
							$universal="Form submitted successfully check your email for a link to activate your account";

						 //sending an email to verify
							$code="this is testing of mail sending from startup-bvp website ";
							$message = "Your Activation Code is ";

							$to=$email;
							$subject="Activation Code For startup-bvp";
							$from = 'vaibhavchellani223@gmail.com';
							$body='Your Activation Code is '.$code;
							$headers = "From:".$from;
							$retval=mail($to,$subject,$body,$headers);
							if( $retval == true ) {
								echo "Message sent successfully...";
								$_SESSION["session_var"]=1;
								$_SESSION["login_message"]="                      WELCOME  ";
								$_SESSION["username"]=$username;
								$_SESSION["user_email"]=$email;

								?><script type="text/javascript">
								window.location = "http://localhost/startup-bvp1.1/index.php";
							</script>  
							<?php
								//todo add email verification part
						}else {
							echo "Message could not be sent...";
						}

					}
					catch(PDOexception $e){
						$universal="NOT SUCESSFUL";
					}
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
</body>
</html>