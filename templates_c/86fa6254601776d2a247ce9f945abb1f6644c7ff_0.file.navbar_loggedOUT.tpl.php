<?php
/* Smarty version 3.1.31, created on 2017-05-28 10:14:47
  from "/var/www/html/startup-bvp1.1/templates/navbar_loggedOUT.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_592a55bfeb3676_05727464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86fa6254601776d2a247ce9f945abb1f6644c7ff' => 
    array (
      0 => '/var/www/html/startup-bvp1.1/templates/navbar_loggedOUT.tpl',
      1 => 1495912991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592a55bfeb3676_05727464 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>

	<title>logout  navabr</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<style>
		.navbar {
    margin-bottom: 0;
  /* background-color: #292c2f;*/
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
   /* color: #6F1EF4 !important;*/
    color: #292c2f !important;
    background-color: #FCFAFF !important;
    font-size: 16px;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
	</style>
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
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li><a href="signup/signin.php">LOG IN</a></li>
					<li><a href="php/signup.php">SIGN UP</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
</body>
</html><?php }
}
