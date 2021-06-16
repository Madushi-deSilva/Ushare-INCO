<link rel="stylesheet" type="text/css" href="css/home.css">
<style>
		body{
		background-image: url('images/—Pngtree—thrillery stroller selling pear cartoon_1080511.jpg');
		height: auto;
		width: auto;
		background-repeat: no-repeat;
		}
</style>
</head>
<body>
<?php
include_once "header.php";
?>
	<div class ="topnav" id="my topnav">
		<a style="float:left"><img src="images/FinalLogo.png" style="width:150px;height:150px"/></a>
		<a href="About_us.php">About</a>		
		<a href=#news >News</a>
		<a href="#contact">Contact</a>
		<a href="#home class="active>Home</a>
		<i class="fa fa-bars"></i>
	</div>
	<div id="container">
		<section class="sec1">
            <h1 class="heading">Rent (almost) anything</h1>
            <h3 class="heading">Convenient access to any item</h3>
            <div class="row">
            	<input type="text" name="" placeholder="Search" align="center" class="searchBar">
            	<input type="submit" name="" value="Search" class="btnSearch">
            	<select name="Location" id="location">
    				<option value="colombo">Colombo</option>
    				<option value="gampaha">Gampaha</option>
  				</select>
            </div><br>
            <div class="row">
            	<p class="rentRow">OR list an item for <a href="rent.php">
            		<input type="submit" name="" value="Rent" class="btnRent">
            	</a></p>
            </div><br>
             <div class="row">
            	<p class="rentRow">OR have a vehicle for <a href="delivery.php"><input type="submit" name="" value="Delivery" class="btnDel"></a></p>
            </div>
    	</section>
    	<section class="sec2">
        	<div class="center">
				<div class="row" style="padding-top: 50px;padding-bottom: 50px">
					<div class="col-12 col-md-4" align="center">
						<div class="icon size"><i class="fas fa-star" style="font-size:50px;color:blue;margin-left:0"></i>
						</div>
                    	<p class="p1">Access More</p>
                    	<p class="p2">Pursue passions. Get things done</p>
					</div>
					<div class="col-12 col-md-4" align="center">
						<div class="icon bed"><i class="fas fa-money-check-alt" style="font-size:50px;color:yellow;margin-left:0"></i></div>
                    	<p class="p1">Save Money</p>
                    	<p class="p2">Buy less. Rent for a fraction of the cost</p>
					</div>
					<div class="col-12 col-md-4" align="center">
						<div class="icon adultskid"><i class="fab fa-pagelines" style="font-size:50px;color:green;margin-left:0"></i></div>
                    	<p class="p1">Help the Planet</p>
                    	<p class="p2">Live lighter. Reduce waste</p>
					</div>
				</div>
			</div>
		</section>
		<section class="sec3">
			<div class="row" style="padding-bottom: 50px">
				<div class="col-md-4">
					<div class="card catCard" style="border-radius: 10px">
						<div class="card-body" align="center">
							<img src="images/electronic.jpg" class="imgCard" />
							<h5><b><a href="electronics.php">Electronic</a></b></h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card catCard" style="border-radius: 10px">
						<div class="card-body" align="center">
							<img src="images/grass.jpg"  class="imgCard" />
							<h5><b><a href="home_garden.php">Home & Garden</a></b></h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card catCard" style="border-radius: 10px">
						<div class="card-body" align="center">
							<img src="images/disco.jpg" class="imgCard" />
							<h5><b><a href="outdoor_party_event.php">Party & Events</a></b></h5>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br><br><br>
		<section class="sec4">
			<div class="row"><h3 style="padding-left: 450px;font-family: serif;font-weight: bold;">RECENT REVIEWS</h3></div>
			<div class="row" style="padding-top: 10px">
				<div class="col-md-6">
					<img src="images/capture1.png">
				</div>
				<div class="col-md-6">
					<img src="images/capture2.png">
				</div>
			</div>
			<br><br>
			<div class="row" style="padding-bottom: 10px">
				<div class="col-md-6">
					<img src="images/capture3.png">
				</div>
				<div class="col-md-6">
					<img src="images/capture4.png">
				</div>
			</div>
		</section>
	</div>
<?php
include_once "footer.php";
?>