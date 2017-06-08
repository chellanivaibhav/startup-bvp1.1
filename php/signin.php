<?php session_start(); 
  //user not found =2 , logged in =1 , logged out =0

include('../vendor/smarty/smarty/libs/Smarty.class.php');
$smarty = new Smarty;
if(!isset($_SESSION["session_var"])){
  $_SESSION["session_var"]=0;
}
if($_SESSION["session_var"]==1){
  //means user is signed in 
  $smarty->display('../templates/navbar_loggedIN.tpl');
}
elseif($_SESSION["session_var"]==0){
  //display login form
  require '../php/connToDB.php';
  $smarty->display('../templates/navbar_loggedOUT.tpl');
  $smarty->display('../templates/signin_page_template.tpl');
  
  $smarty->assign('EmailORUsername', '');
  $smarty->assign('Password', '');
  $smarty->assign('passwordERR', '');
  $smarty->assign('EmailORUsernameERR', '');
  $smarty->assign('universalERR','');
  $smarty->assign('username', '');

  $EmailORUsername=$Password="";
  $EmailORUsernameERR=$PasswordERR=$universalERR="";
  $user=$passwordinput=2;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["EmailORUsername"])){
      $EmailORUsernameERR="Cannot leave empty ";
      $smarty->assign('EmailORUsernameERR',$EmailORUsernameERR);
    }
    else{
      $EmailORUsername=$_POST["EmailORUsername"];
      if(!filter_var($EmailORUsername, FILTER_VALIDATE_EMAIL)) {
        //triggered when user inputs username
      $sql=$conn->prepare("SELECT * FROM user_details where user_email='$EmailORUsername'");
  $sql->execute();
    $user=1; 
      }
      else{
        //triggered when user enters email
        $user=0;
      }
    }
    if(empty($_POST["Password"])){
      $PasswordERR="Cannot be left empty";
      $smarty->assign('PasswordERR', $PasswordERR);

    }
    else{
      $passwordinput=1;
      $Password=$_POST["Password"];
      $smarty->assign('Password', $Password);

    }
  }
  if($user==1 && $passwordinput==1){
            //make sql statement contaning username and password to check  //if user exists
    $sql=$conn->prepare("SELECT * FROM user_details where username='$EmailORUsername'");
    $sql->execute();
    $sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
    if(!$sqlResult){
      $universalERR="Username Not found";
            $smarty->assign('universalERR', $universalERR);

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
      
    }
    else{
      $universalERR="Incorrect Credentials";
            $smarty->assign('universalERR', $universalERR);

      
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
          $smarty->assign('universalERR', $universalERR);


    

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
          $smarty->assign('universalERR', $universalERR);

  }
}
}



      $smarty->assign('EmailORUsername', $EmailORUsername);
      $smarty->assign('Password', $Password);
      $smarty->assign('PasswordERR', $PasswordERR);
      $smarty->assign('EmailORUsernameERR', $EmailORUsernameERR);
      $smarty->assign('universalERR', $universalERR);
      $smarty->assign('username', $username);

}
else{
  echo 'nothing sleected';
}
?>
