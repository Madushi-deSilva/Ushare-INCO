<!DOCTYPE html>
<html>
<head>
	<title>
		LendorHomepage
	</title>
	<link rel="stylesheet" type="text/css" href="css/lendorhomepage.css">

	<style>
	body{
background-image: url('images/57-575357_mechanic-clipart-builder-handyman-clipart.png');

background-size: 85%;

height: 95%;
width: 95%;
font-size: 22px;
color: #222124;
}
</style>
</head>


<body >

	<div class ="topnav" id="my topnav">
		<a href="About_us.php">About</a>		
		<a href=#news >News</a>
		<a href="#contact">Contact</a>
		<a href="home.php">Home</a>
		<i class="fa fa-bars"></i>
	</div><br><br>
<div class="container" style="padding-left:20px">
	<br>

<form action="/action_page.php" >
	<table><tr><td>
  <label>Location:</label></td><td>
  <input type="radio" id="lctn1" name="lctn1" value="lctn1">
  <label for="GIve Location">Give Location</label>
  <input type="radio" id="lctn2" name="lctn2" value="lctn2">
  <label for="female">Another Location</label></td></tr>
  <br>
	
<br>
	
	<div>
		<label for="item">
			<tr><td>what's the item</td>
		</label><td>
		<input type="text" name="item" placeholder="Enter your Item">
	</td></tr>
<br>
	<div><tr><td>
		<label for="category">Category :</label></td>
		<td>
		<select name="category" id="category">
			<option value="Electronic Accessories">Electronic Accessories</option>
    		<option value="Electric Gadgets">Electric Gadgets</option>
   			<option value="Camera & photo Accessories">Camera & photo Accessories</option>
   			<option value="Cleaning suppliers">Cleaning suppliers</option>
   			<option value="Kitchen necessities">Kitchen necessities</option>
   			</td></tr>
		</select>

	</div>
<br>
	<div><tr><td>
		<label>Click on the "Choose File" button to upload a file:</lebal></td>
<td>
		<form action="/action_page.php">
  			
		
		<label for="photo"></label>
		<input type="file" id="myFile" name="filename">
  		
  			</td></tr>

	
	<br>
	<tr><td>
		<label for="Brand">
			Brand :
		</label></td><td>
		<input type="text" name="Brand" placeholder="Enter your Brand">
	</td></tr>
	<br>
	<tr><td>
		<label for="text">
			Model :
		</label></td><td>
		<input type="text" name="Model" placeholder="Enter your Model">
	</td></tr>
<br>
<tr><td>
		<label for="year">
			Manufacturing year :
		</label></td><td>
		<input type="text" name="Manufacturing year" placeholder="Enter your Manufacturing year"></td></tr>
	
<br><tr><td>
 <button type="button" class="cancelbtn">Cancel</button></td><td>
<button type="submit" class="signupbtn">Submit</button></td></tr>
<br>

</form>
</div>
</body>
</html>