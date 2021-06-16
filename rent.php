<link rel="stylesheet" type="text/css" href="css/delivery.css">
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
		<a href="About_us.php">About</a>		
		<a href=#news >News</a>
		<a href="#contact">Contact</a>
		<a href="home.php">Home</a>
		<i class="fa fa-bars"></i>
	</div>
	<br>
	<br>
	<table class="center"><tr>
		<img src="images/446-4462649_animated-faces-my-hero-design-clip-art-woman.png" class="avatar" align="center"></tr>
		
			<tr>
				<td><label for="mail">Email </label></td>
				<td><input type="text" name="email" size="20px" required placeholder="Enter Username"></td>
			</tr>
			
			<tr>
				<td><label for="password">Password </label></td>
				<td><input type="password" name="pswd1" size="20px" required placeholder="Enter Password" "></td>
			</tr>
			<tr><td></td>
				<td>
					<a href="lendorhomepage.php"><button type="submit" name="Login" size="20px">Login</button></a></td>
			</tr>
			
			<tr><td><label>
				<input type="checkbox" checked="checked" name="remember me">Remember me
			</label></td></tr>

			<td></td>

			<tr><label><td>
				<label for="cancel"></label>
				<button type="button" class="cancelbtn" name="cancel">Cancel</button>
			</td></label>
					<td><td><td>
						<label>
				<span class="psw">Lost your <a href="#">Password?</a></span></td></td></td>
			</label>
			</td></tr>
	</table>
	<br><br></table>
			<div class="Signup">
					<label>Don't have an Account?</label>			
					<label><a href="signuplender.php" >Signup Here</a></label>
		
			</div>
<?php
include_once "footer.php";
?>