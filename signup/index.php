<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SIGN IN</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
            .username{
                  font-size: 22px;
                  width: 80%;
                  padding: 12px 0px;
                  margin: 10px 25px;
                  box-sizing: border-box;
                  border: none;
                  border-bottom: 2px solid #ccc;
            }
            .submitbutton{
                  margin-left: 40px;
                  margin-bottom: 10px;

            }
            .box{
                  margin-top: 10%;
                  border: solid;
                  border-radius: 10px;
                  margin-top: 
            }
            .newuserbutton{
                  margin-top: 10px;
                  margin-left: 30px;
                  margin-right: ;
            }
      </style>
      <!-- Our CSS stylesheet file -->
      <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
    </head>

    <body>      
    <div class="row">
            <div class="col-sm-4">
                  
            </div>
      	<div class="box col-sm-4">
      		<?php require '../php/connToDB.php';?>
      		<?php 
      		$EmailORUsername=$Password="";
      		$EmailORUsernameERR=$PasswordERR=$universalERR="";
      		$user=$passwordinput=2;
      		if($_SERVER["REQUEST_METHOD"]=="POST"){
      			if(empty($_POST["EmailORUsername"])){
      				$EmailORUsernameERR="Cannot leave empty bruh";
      			}
      			else{
      				$EmailORUsername=$_POST["EmailORUsername"];
      				if (!filter_var($EmailORUsername, FILTER_VALIDATE_EMAIL)) {
      					//triggered when user inputs username
      					$user=1; 
      				}
      				else{
      					//triggered when user enters email
      					$user=0;
      				}
      			}
      			if(empty($_POST["Password"])){
      				$PasswordERR="Cannot be left empty";
      			}
      			else{
      				$passwordinput=1;
      				$Password=$_POST["Password"];
      			}


      		}

      		if($user==1 && $passwordinput==1){
      			//make sql statement contaning username and password to check  //if user exists
      			$sql=$conn->prepare("SELECT * FROM user_details where username='$EmailORUsername'");
      			$sql->execute();

      			$sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
      			if(!$sqlResult){
      				$universalERR="Username Not found";
      			}
      			else {
      				if($Password==$sqlResult["user_password"])
      					$universalERR="Welcome ".$EmailORUsername;
      				//todo alter user_session variable and redirect to site page
      				else{
      					$universalERR="Incorrect Credentials";
      				}
      			}
      			
      		}
      		elseif($user==0 && $passwordinput==1) {
      			//makes sql statement contaning email and password to check if //user exists
      			$sql=$conn->prepare("SELECT * FROM user_details where user_email='$EmailORUsername'");
      			$sql->execute();

      			$sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
      			if(!$sqlResult){
      				$universalERR="Email Not found";
      			}
      			else {
      				if($Password==$sqlResult["user_password"])
      					$universalERR="Welcome ".$EmailORUsername;
      				//todo alter user_session variable and redirect to site page
      				else{
      					$universalERR="Incorrect Credentials";
      				}
      			}
      		}

      		?>
      		<span><?php echo $universalERR;?></span>
      		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      			<input type="text" class="username" name="EmailORUsername" placeholder="Enter Email or Username" value=""><?php echo $EmailORUsernameERR; ?><br>
      			<input type="password" class="username" name="Password" placeholder="Enter password" value=""><?php echo $PasswordERR; ?><br><br>
      			<input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
      		</form>
      		<?php echo $EmailORUsername. " " .$Password ; ?>
      	</div>
            <div class="col-sm-4">
                  
            </div>
      </div>
      <div class="row">
      <div class="col-sm-4">
            
      </div>
      <div class="col-sm-4">
          <form method="POST" action="../php/signup.php">
               <input type="submit" class=" newuserbutton btn btn-primary btn-lg" name="Submit" value="new users">
         </form>
   </div>
   <div class="col-sm-4">
         
   </div>
   </div>
		<!-- <div id="formContainer">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="loginEmail" id="loginEmail" value="Email" />
				<input type="password" name="loginPass" id="loginPass" value="pass" />
				<input type="submit" name="submit" value="Login" />
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>      
        
		<!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script> -->

	</body>
	</html>

