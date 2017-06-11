<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="searchstyle.css">
	<link rel="stylesheet" type="text/css" href="searchbutton.css">

	<style >
		#container1:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}

	</style>

</head>
<body>
	<!-- navbar start -->
	
	<!-- navbar end -->
	<div class="subfilter" style="padding-top: 100px;">
			<div id="filterup"></div>

			<div id="filter">
				<form action="search.php" method="POST">
					<div class="container-fluid1 dropdown btn1">


						<select name="Gender" class="btn  btn-responsive xyz" style=""><!-- xyz for  styling -->
							<option value="Any">Gender : Any</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="container-fluid1 btn2">

						<select name="Distance" class="btn  btn-responsive xyz"  ><!-- xyz for  styling -->
							<option value="0">Distance:All</option>

							<option value="3">1-3 km</option>
							<option value="5">3-5 km</option>
							<option value="7">5-7 km</option>
						</select>
					</div>
					<div class="container-fluid1 btn3">


						<select name="Budget" class="btn  btn-responsive xyz" ><!-- xyz for  styling -->
							<option value="0<">Budget : All</option>
							<option value="4<">4000<</option>
							<option value="4+">4000+</option>
							<option value="5+">5000+</option>
						</select>
					</div>
					<div class="container-fluid1 btn4">

						<input type="submit" name="SUBMIT" class=" btn" id="submitbutton2" >
					</div>
				</form>
			</div>

			<div id="filterdown"></div>
		</div>
	<!-- connects to database  WHERE gender=$_POST["Gender"]-->
	<?php require 'connToDB.php';?>
	<br>
	<?php

	$Gender=lcfirst($_POST["Gender"]);
	$DistanceUpperLimit=$_POST["Distance"];
	$DistanceLowerLimit=$_POST["Distance"]-2;
	if(strcmp($Gender,'any')==0){
		$sql=$conn->prepare("SELECT * FROM property_listings WHERE  Distance_College <= '$DistanceUpperLimit' AND Distance_College >= '$DistanceLowerLimit' ORDER BY Distance_College ");
	}
	else{
		$sql=$conn->prepare("SELECT * FROM property_listings WHERE 
			gender = '$Gender' AND Distance_College <= '$DistanceUpperLimit' AND Distance_College >= '$DistanceLowerLimit' ORDER BY Distance_College ");
	}
	$sql->execute();

	while($row=$sql->fetch(PDO::FETCH_ASSOC)){	
		$Property_id=$row["property_id"];
		$Property_Details=$conn->prepare("SELECT property_address,property_owner_phone,property_owner_owner_name FROM property_details WHERE property_id='$Property_id'");
		$Property_Details->execute();
		$Property_Details_Result=$Property_Details->fetch(PDO::FETCH_ASSOC);

		echo 			'
						
	<div class="col-sm-3" >
		
	</div>

	<div class="container col-sm-6 xyz1" id="container1" >
		<div class="address">Address:' .$Property_Details_Result["property_address"] .'</div>
		<div class="goto"><a href="#">Goto</a></div>
		<div class="container" id="container2">
			<div class="rent">Rent:' .$row["rent_pm"] .'</div>
			<div class="details"><button class="btn btn-primary" id="button">Details</button></div>
			<div class="contact"><button class="btn btn-primary" id="button">Contact Owner</button></div>
		</div>
		<div class="container" id="container3" style=" padding-left: 0px;
    padding-right: 0px;">
			<div class="image" style="vertical-align:middle;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						<img src="https://placekitten.com/250/135" class="img-responsive" alt="Los Angeles" style="width:100%;">
						</div>

						<div class="item">
							<img src="https://placekitten.com/250/136" class="img-responsive" alt="Chicago" style="width:100%;">
						</div>

						<div class="item">
							<img src="https://placekitten.com/250/138" class="img-responsive" alt="New york" style="width:100%;">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>


			</div>
			<div class="seats">Seats</div>
		</div>
	</div>
	<div class="col-sm-3" >

	</div>
						';
	
}


?>


</body>
</html>