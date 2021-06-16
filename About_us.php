<link rel="stylesheet" type="text/css" href="css/About_us.css">
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

	<div class="about-section" style="text-align: left;padding-left: 150px;padding-right: 100px">
  		<h1>About Us Page</h1>
  		<h3>What is UShare?</h3>
  		<p>UShare is the trusted marketplace for renting almost anything. You can borrow from people in your area. Everyday, we connect people who need things - with others that have them<br><br>
  		We believe in getting people to work together to make the world a more efficient place for everyone. So we’re making it quick and easy for people to share their belongings. Our dream is a platform where all goods - from the everyday to the abstract - can be borrowed within minutes.<br>
  		Why? Because we know that sharing is the future</p>
	</div>
	
	 <div class="container" id="con">
  	 	<div style="text-align:center;">
    	<h2>Review</h2>
    	<p>Your review about our service</p>
    	</div>
  	<div class="row">
    		<div class="column">
      			<form action="/action_page.php">
        			<label for="fname">Name</label>
        			<input type="text" id="name" name="name" placeholder="Your name..">
        			<label for="email">E mail</label>
        			<input type="text" id="email" name="email" placeholder="Your email">
        			<label for="subject">Comment</label>
        			<textarea id="comment" name="comment" placeholder="Write something.." style="height:100px"></textarea>
        			<input type="submit" value="Submit">
      			</form>
    		</div>
  		</div>
	</div> 
<?php
include_once "footer.php";
?>