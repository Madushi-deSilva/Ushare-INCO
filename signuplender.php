<!DOCTYPE html>
<html>
<head>
	<title>
		Signup
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	body{
		background-image: url('images/—Pngtree—simple wind blue sky poster_946977.jpg');
		font-family: Courier New;
		font-size: 22px;
	}
</style>
	
	<link rel="stylesheet" type="text/css" href="css/signuplender.css">
	</head>
<body>
	<div class ="topnav" id="my topnav">
		<a href="About_us.php">About</a>		
		<a href=#news >News</a>
		<a href="#contact">Contact</a>
		<a href="home.php">Home</a>
		<i class="fa fa-bars"></i>
	</div>
	<br><br>

	<h2>Signup Form</h2>
	<p >Please fill in this form to create an Lendor account.</p>
	<table>
		<tr><td>
	<form action="/action_page.php" method="post" >

	<div class="details">
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Enter Name"><br>

		<label for="email">E-mail</label>
		<input type="text" name="email" placeholder ="Enter E-mail"><br>

		<label for="Password">Password</label>
		<input type="Password" name="Password"><br>

		<label for="repeat psw">Re Enter Password</label>
		<input type="Password" name="Password2"><br>

		<label for="tp">Mobile Number</label>
		<input type="text" name="tp" placeholder= "Enter Telephone number">

		<label for="address">Address</label>
		<input type="text" name="address" placeholder ="Enter address here">

		<label>
			<input type="checkbox" checked="checked" name="remember me">Remember me</label>

		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p></td>

		
  </div>
    
   
	</tr>
    <tr>
    	<td>
    		<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      
    <a href="lendorhomepage.html" target="new">
    	<button type="submit" class="signupbtn">Sign Up</button></a></td></div>

    		</div>
    	</td>
    </tr>

</table>
	

	</form>
</body>
</html>