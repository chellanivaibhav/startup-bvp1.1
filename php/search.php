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


</head>
<body>
	<!-- navbar start -->
	
	<!-- navbar end -->
	<div class="row box">
		<div class="col-sm-4">

		</div>
		<div class="col-sm-4">

			<form action="search.php" method="POST">
				<div class="dropdownbox1 "><!--distance dropdown box it is  -->
					<div class="dropdown ">
						<select name="Distance" class="btn btn-default xyz" ><!-- xyz for  styling -->
							<option value="3">1-3 km</option>
							<option value="5">3-5 km</option>
							<option value="7">5-7 km</option>
						</select>

					</div>
				</div>

				<div class="dropdownbox1"><!-- gender dropdown it is -->
					<div class="dropdown">

						<select name="Gender" class="btn btn-default xyz"><!-- xyz for  styling -->
							<option value="Any">Gender : Any</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>

					</div>
				</div>
				<div class="dropdownbox1"><!--budget dropdown box it is  -->
					<div class="dropdown">

						<select name="Budget" class="btn btn-default xyz"><!-- xyz for  styling -->
							<option value="4<">4000<</option>
							<option value="4+">4000+</option>
							<option value="5+">5000+</option>
						</select>

					</div>
				</div>
				<div class="dropdownbox1">
					<input type="submit" name="SUBMIT">
				</div>
			</form>
		</div>
		<div class="col-sm-4">

		</div>
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
						<div class="row">
						<div class="col-sm-3">
		
						</div>

 						<div class="container col-sm-6" id="container1">
 						<div class="address">Address:' .$Property_Details_Result["property_address"] .'</div>
 						<div class="goto"><a href="#">Goto</a></div>
 						<div class="container" id="container2">
 						<div class="rent">Rent:' .$row["rent_pm"] .'</div>
 						<div class="details"><button class="btn btn-primary">Details</button></div>
 						<div class="contact"><button class="btn btn-primary">Contact Owner</button></div>
 						</div>
 						<div class="container" id="container3">
 						<div class="image">Image</div>
 						<div class="seats">Seats</div>
 						</div>
 						</div>
 						<div class="col-sm-3">
 		
 						</div>
						</div>';
	
}


?>


</body>
</html>