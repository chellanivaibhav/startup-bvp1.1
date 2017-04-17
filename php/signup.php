<?php require 'connToDB.php';?>
<!-- for validating form  -->
<?php 
$usernameERR=$passwordERR=$emailERR=$phoneNoERR="";
if($_SERVER["REQUEST_METHOD"]=="post"){
	$usernameERR="hi";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
	<div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"> 
		<input type="text" name="username" placeholder="username"><br><?php echo $usernameERR;?>
			<input type="text" name="email" placeholder="email"><br><?php echo $emailERR;?>
			<input type="text" name="phoneNo" placeholder="Phone Number"><br><?php echo $phoneNoERR;?>
			<input type="password" name="password" placeholder="Password"><br><?php echo $passwordERR;?>
			<input type="submit" name="sign up">
		</form>
	</div>
</body>
</html>