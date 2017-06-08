<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="hom.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
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
                <!-- <script>
                  $(document).ready(function(){
                    $("#navup").click(function(){
                      $(".collapse").slideUp("slow");
                    });
                    $(".navbar .navbar-header").click(function(){
                      $(".collapse").slideToggle("slow");
                    });
                  });
                </script>
                 -->
              </head>
              <body style="background-color: #95C7E8;"> 

               <!-- navbar start -->
               <!-- <nav class="navbar navbar-default navbar-fixed-top">
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
         </nav> -->
         <!-- navbar ended -->
         <div class="row container-fluid" id="navup">
          <div class="col-sm-4">

          </div>
          <div class="box col-sm-4">
            <br>
            <!-- forms to be styled -->
            {$universal}
            <form method="post" action="{$smarty.server.PHP_SELF|escape}">

            <input type="text" class="username" name="username" placeholder="username" autocomplete="off">{$usernameERR}<br>

             <input type="text" class="username" name="email" placeholder="email" autocomplete="off">{$emailERR}<br>
             <input type="text" class="username" name="phoneNo" placeholder="Phone Number" autocomplete="off">{$phoneNoERR}<br>
             <input type="password" class="username" name="password" placeholder="Password">{$passwordERR}<br>
             <input type="submit" class="submitbutton btn  btn-lg"  name="signup" value="Sign Up">
           </form>
           {$username}{$password}{$email}{$phoneNo}
         </div>
         <div class="col-sm-4">

         </div>
       </div>
       <!-- navbar start -->

       <!-- navbar ended -->
     </body>
     </html>