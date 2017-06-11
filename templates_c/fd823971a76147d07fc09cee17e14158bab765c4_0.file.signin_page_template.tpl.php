<?php
/* Smarty version 3.1.31, created on 2017-06-11 16:24:37
  from "/var/www/html/startup-bvp1.1/templates/signin_page_template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593d216d20ac22_43883099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd823971a76147d07fc09cee17e14158bab765c4' => 
    array (
      0 => '/var/www/html/startup-bvp1.1/templates/signin_page_template.tpl',
      1 => 1497167119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593d216d20ac22_43883099 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>



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
</head>

<body>  
<div class="text-center" style="margin-top: 70px;">
<h2>Sign in to "company"</h2>
</div>    
<div class="row container-fluid" >
  <div class="col-sm-4">
  </div>
  <div class="box col-sm-4" style="background-color: white;"">
    <span><?php echo $_smarty_tpl->tpl_vars['universalERR']->value;?>
</span>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
">
     <input type="text" class="username" name="EmailORUsername" placeholder="Enter Email or Username" value=""><?php echo $_smarty_tpl->tpl_vars['EmailORUsernameERR']->value;?>
<br>
     <input type="password" class="username" name="Password" placeholder="Enter password" value=""><?php echo $_smarty_tpl->tpl_vars['PasswordERR']->value;?>
<br><br>
     <input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
   </form>
   <?php echo $_smarty_tpl->tpl_vars['EmailORUsername']->value;
echo $_smarty_tpl->tpl_vars['Password']->value;?>

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





<?php }
}
