<?php session_start(); 

  //user not found =2 , logged in =1 , logged out =0
if($_SESSION["session_var"]==1){
  //means user is signed in 

}
elseif($_SESSION["session_var"]==0){
  echo 'display login form';
  require '../php/connToDB.php';

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
      if($Password==$sqlResult["user_password"]){

        $universalERR="Welcome ".$EmailORUsername;
        $_SESSION["username"]=$sqlResult["username"];
        $_SESSION["user_email"]=$sqlResult["user_email"];
        $_SESSION["session_var"]=1;
        $_SESSION["login_message"]="                      WELCOME  ";
        ?><script type="text/javascript">
        window.location = "http://localhost/startup-bvp1.1/index.php";
      </script>  
      <?php
              //todo alter user_session variable and redirect to site page
    }
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
    if($Password==$sqlResult["user_password"]){

      $universalERR="Welcome ".$EmailORUsername;
      $_SESSION["username"]=$sqlResult["username"];
      $_SESSION["user_email"]=$sqlResult["user_email"];
      $_SESSION["session_var"]=1;
      $_SESSION["login_message"]="                      WELCOME  ";
      ?><script type="text/javascript">
      //todo to change before putting on server
      window.location = "http://localhost/startup-bvp1.1/index.php";
    </script>  
    <?php


              //todo alter user_session variable and redirect to site page
  }
  else{
    $universalERR="Incorrect Credentials";
  }
}

}


echo '<div class="text-center" style="margin-top: 70px;">
<h2>Sign in to "company"</h2>
</div>    
<div class="row container-fluid" >
  <div class="col-sm-4">

  </div>
  <div class="box col-sm-4" style="background-color: white;"">
    <span>'.$universalERR.'</span>
    <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
     <input type="text" class="username" name="EmailORUsername" placeholder="Enter Email or Username" value="">'.$EmailORUsernameERR.'<br>
     <input type="password" class="username" name="Password" placeholder="Enter password" value="">'.$PasswordERR.'<br><br>
     <input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
   </form>
   '.$EmailORUsername. ' ' .$Password .'
 </div>
 <div class="col-sm-4">

 </div>
</div>
<div class="row container-fluid">
  <div class="col-sm-4">

  </div>
  <div class="col-sm-4 box1" style="float: left;">

    <form method="POST" action="../php/signup.php">
     <span>&nbsp;&nbsp;Create account here :-</span>
     <a href="http://localhost/startup-bvp1.1/php/signup.php" style="text-decoration: none;">&nbsp;  &nbsp;  New Users</a>
   </form>
 </div>
 <div class="col-sm-4">

 </div>
</div>';
}
else{
  echo 'nothing sleected';
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SIGN IN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="home.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <style>
    body{
      background-color: #DCE0E0;
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
  .submitbutton{
    margin-left: 20px;
    margin-bottom: 10px;

  }
  .box{
    margin-top: 3%;
    border: solid;
    border-color: #6F6F6F;
    border-radius: 5px;
    padding-bottom: 10px;
  }
  .box1{
    border: solid;
    border-radius: 5px;
    margin-top:  10px;
    border-color: #6F6F6F;
    background-color: white;
  }
  .box1 span{
    font-size: 26px;
  }
  .box1 a{
    font-size: 22px;
  }


</style>
<!-- Our CSS stylesheet file -->
<!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
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
                  <li><a href="signin.php">SIGN IN</a></li>
                  <li><a href="../php/signup.php">SIGN UP</a></li>
                  <li><a href="../php/logout.php">LOG OUT</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- navbar end
           -->
        </body>
        </html>



