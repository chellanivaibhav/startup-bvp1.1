<?php 

session_start();

require 'connToDB.php';

include('../vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->assign('universal', '');
$smarty->assign('usernameERR', '');
$smarty->assign('passwordERR', '');
$smarty->assign('emailERR', '');
$smarty->assign('phoneNoERR', '');
$smarty->assign('username', '');
$smarty->assign('password', '');
$smarty->assign('email', '');
$smarty->assign('phoneNo', '');
if(isset($_SESSION["session_var"])){
		//do nothing for now
		if ($_SESSION["session_var"]==0) 
		{
			 	$smarty->display('../templates/navbar_loggedOUT.tpl');

		} 
		else if($_SESSION["session_var"]==1)
		{
			 	$smarty->display('../templates/navbar_loggedIN.tpl');
		 	
		}
		  
}
else{
	$_SESSION["session_var"]=0;
}

$universal="";
           $usernameERR=$passwordERR=$emailERR=$phoneNoERR="";
           $username=$password=$email=$phoneNo="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["username"])){
		$usernameERR='Field Cannot Be Left Empty';
		$smarty->assign('usernameERR', $usernameERR);
	}
	else{
		$username=$_POST["username"];
		$smarty->assign('usernameERR', $username);
	}
	if(empty($_POST["email"])){
		$emailERR="Field Cannot Be Left Empty";
		$smarty->assign('emailERR', $emailERR);
	}
	else{
		if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
			$emailERR="Invalid email id";	
			$smarty->assign('emailERR', $emailERR);
		}
		else{
			$email=$_POST["email"];
			$smarty->assign('email', $email);
		}
	}
	if(empty($_POST["phoneNo"])){
		$phoneNoERR="Field Cannot Be Left Empty";
		$smarty->assign('phoneNoERR', $phoneNoERR);
	}
	else{
		if(!is_numeric($_POST["phoneNo"])){
			$phoneNoERR="Invalid Phone Number ";
			$smarty->assign('phoneNoERR',$phoneNoERR);
		}
		else{
			$phoneNo=$_POST["phoneNo"];
			$smarty->assign('phoneNo', $_POST["phoneNo"]);
		}
	}
	if(empty($_POST["password"])){
		$passwordERR='Field Cannot Be Left Empty';
		$smarty->assign('passwordERR', $passwordERR);
	}
	else{
		if(strlen($_POST["password"])<=5){
			$passwordERR="Password should be more than 5 characters";
			$smarty->assign('passwordERR', $passwordERR);

		}
		else{
			$password=$_POST["password"];
			$smarty->assign('password', $password);
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
$smarty->assign('universal', $universal);
$smarty->display('../templates/signup_page_template.tpl');
?>

