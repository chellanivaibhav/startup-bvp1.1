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
    border-color: #292c2f;
    border-radius: 0px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
  }
  .box:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  .box1{
    margin-left: auto;
    margin-right: auto;
    width: 33.3%;
    border: solid;
    border-radius: 0px;
    margin-top:  10px;
    border-color: #292c2f;
    background-color: white;
  }
  .box1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  @media  screen  and (min-width:750px){
    .box1{
      margin-left: auto;
      margin-right: auto;
      width: 33.3%;
    }
    .box1 span{
      font-size: 20px;
    }
    .box1 a{
      font-size: 18px;
    }
  }
  @media  screen  and (max-width:750px){
    .box1{
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
    .box1 span{
      font-size: 20px;
    }
    .box1 a{
      font-size: 18px;
    }
  }
</style>
<!-- <script>
  $(document).ready(function(){
    $("#navup").click(function(){
      $(".collapse").slideUp("slow");
    });
    $(".navbar .navbar-header").click(function(){
      $(".collapse").slideToggle("slow");
    });
  });
</script>       -->   

</head>

<body>  
<div class="text-center" style="margin-top: 70px;">
<h2>Sign in to "company"</h2>
</div>    
<div class="row container-fluid" >
  <div class="col-sm-4">
  </div>
  <div class="box col-sm-4" style="background-color: white;"">
    <span>{$universalERR}</span>
    <form method="post" action="{$smarty.server.PHP_SELF|escape}">
     <input type="text" class="username" name="EmailORUsername" placeholder="Enter Email or Username" value="">{$EmailORUsernameERR}<br>
     <input type="password" class="username" name="Password" placeholder="Enter password" value="">{$PasswordERR}<br><br>
     <input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
   </form>
   {$EmailORUsername}{$Password }
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
</div>
  

      </body>
      </html>





