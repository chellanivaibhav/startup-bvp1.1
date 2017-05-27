<?php
/* Smarty version 3.1.31, created on 2017-05-27 23:27:51
  from "/var/www/html/startup-bvp1.1/templates/signup_page_template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5929be1f414747_85450737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef20b36ebd1d81afd3729b701e333af6d62851d0' => 
    array (
      0 => '/var/www/html/startup-bvp1.1/templates/signup_page_template.tpl',
      1 => 1495907861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5929be1f414747_85450737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="hom.ico" />
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
			overflow-x: hidden;
      overflow-y: hidden;
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
     color: #85C1E9 !important;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
     // color: #6F1EF4 !important;
     color: black !important;
     background-color: #FCFAFF !important;
     font-size: 16px;
   }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #85C1E9 !important;
   }
   .submitbutton{
     margin-top: 20px;
     margin-left: 20px;
     margin-bottom: 10px;
   }
/*
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<title>SignUp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="hom.ico" />
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
                  */
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
                    border-color: #58778A;
                    border-radius: 2px;
                    padding-bottom: 1%;
                    background-color: white;
                    margin-bottom: 100px;
                  }
                  .box:hover {
                    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                  }
                  .submitbutton{
                    background-color:#85C1E9;
                    border-radius: 3px; 
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
                <!-- navbar sccript here -->
                <?php echo '<script'; ?>
>
                  $(document).ready(function(){
                    $("#navup").click(function(){
                      $(".collapse").slideUp("slow");
                    });
                    $(".navbar .navbar-header").click(function(){
                      $(".collapse").slideToggle("slow");
                    });
                  });
                <?php echo '</script'; ?>
>
                
              </head>
              <body style="background-color: #95C7E8;"> 

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
         <div class="row container-fluid" id="navup">
          <div class="col-sm-4">

          </div>
          <div class="box col-sm-4">
            <br>
            <!-- forms to be styled -->
            <?php echo $_smarty_tpl->tpl_vars['universal']->value;?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
">

            <input type="text" class="username" name="username" placeholder="username" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['usernameERR']->value;?>
<br>

             <input type="text" class="username" name="email" placeholder="email" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['emailERR']->value;?>
<br>
             <input type="text" class="username" name="phoneNo" placeholder="Phone Number" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['phoneNoERR']->value;?>
<br>
             <input type="password" class="username" name="password" placeholder="Password"><?php echo $_smarty_tpl->tpl_vars['passwordERR']->value;?>
<br>
             <input type="submit" class="submitbutton btn  btn-lg"  name="signup" value="Sign Up">
           </form>
           <?php echo $_smarty_tpl->tpl_vars['username']->value;
echo $_smarty_tpl->tpl_vars['password']->value;
echo $_smarty_tpl->tpl_vars['email']->value;
echo $_smarty_tpl->tpl_vars['phoneNo']->value;?>

         </div>
         <div class="col-sm-4">

         </div>
       </div>
       <!-- navbar start -->

       <!-- navbar ended -->
     </body>
     </html><?php }
}
