<?php require 'connToDB.php';?>
<!-- for validating form  -->
<?php 
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
		if(strlen($_POST["password"]<5)){
			$passwordERR="Password should be more than 5 characters";
		}
		else{

			$password=$_POST["password"];
		}
	}
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
	<div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"> 
			<input type="text" name="username" placeholder="username"><?php echo $usernameERR; ?><br>
			<input type="text" name="email" placeholder="email"><?php echo $emailERR;?><br>
			<input type="text" name="phoneNo" placeholder="Phone Number"><?php echo $phoneNoERR;?><br>
			<input type="password" name="password" placeholder="Password"><?php echo $passwordERR;?><br>
			<input type="submit" name="signup" value="Sign Up">
		</form>
		<?php $username." ".$password . " ". $email." ". $phoneNo ;?>
	</div>
</body>
</html>