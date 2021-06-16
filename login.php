<link rel="stylesheet" type="text/css" href="css/signup.css">
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
<div id="login">
	<label for="email">Email</label><br>
	<input type="email" id="email" placeholder="Type your email here"><br>
	<label for="pw">Password</label><br>
	<input type="Password" id="pw" placeholder="Enter password"><br>
	<button>Login</button>
	<button>Forgot password</button>

<button onclick="document.getElementById('id1').style.display='block'">Sign Up</button>
</div>




<div id="id1" class="signupform">
  <span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close signupform">Close</span>
  <form class="signupform-content" >
    <div class="container">
      <h1>Sign Up Here !!!</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter Email" name="email" required><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">><br>


      <label for="psw-repeat"><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
      
      <label for="mobile"><b>Mobile Number</b></label><br>
      <input type="Number" placeholder="Enter a valid mobile number" name="mobile" required><br>

      <label for="address"><b>Address</b></label><br>
      <input type="text" placeholder="Enter address" name="address" required><br>

      <label for="nic"><b>National Identity Card number</b></label><br>
      <input type="text" placeholder="Enter the National Identity Card number" name="nic" required><br>


      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember password
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn">Cancel</button><br>
        <button type="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>

</html>