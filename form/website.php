<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/website.css" rel="stylesheet">
</head>
<body>
	<div class="header">
	 	<h1>Welcome
	 	<?php
			session_start();
			echo $_SESSION['name'];	 
		?>
			
		</h1>
	 	<p>A website created by me.</p>
	</div>


	<div class="navbar">
	  	<a href="#about">About</a>
	  	<a href="#services">Services</a>
	  	<a href="#portfolio">Portfolio</a>
	  	<a href="#contact">Contact</a>
	  	<a href="logout.php" class="right">Logout</a>
	</div>

	<div class="row">
		<div class="side" id="about">
		    <h2>ABOUT</h2>
		   
		    <div class="fakeimg" style="height:200px;">Image</div>
		    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
		    <h3>More Text</h3>
		    <p>Lorem ipsum dolor sit ame.</p>
		    <div class="fakeimg" style="height:60px;">Image</div><br>
		    <div class="fakeimg" style="height:60px;">Image</div><br>
		    <div class="fakeimg" style="height:60px;">Image</div>
		</div>
		<div class="main" id="services">
		    <h2>SERVICES</h2>
		    <h3>Name</h3>
		    <div class="fakeimg" style="height:200px;">Image</div>
		    <p>Some text..</p>
		    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		    <br>
		    

		    <h3>Name</h3>
		    <div class="fakeimg" style="height:200px;">Image</div>
		    <p>Some text..</p>
		    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  		</div>
  		<div class="main" id="portfolio">
		    <h2>PORTFOLIO</h2>
		    <h3>Name</h3>
		    <div class="fakeimg" style="height:200px;">Image</div>
		    <p>Some text..</p>
		    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		    <br>
		   
		    <h3>Name</h3>
		    <div class="fakeimg" style="height:200px;">Image</div>
		    <p>Some text..</p>
		    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  		</div>

  		<div  class="main" id="contact">
		    <h2>CONTACT</h2>
		    <form action="request.php" method="post">
		    	<label for="fname">First Name</label>
    			<input type="text" id="fname" name="firstname" placeholder="Your name..">

    			<label for="lname">Last Name</label>
    			<input type="text" id="lname" name="lastname" placeholder="Your last name..">

    			<label for="subject">Subject</label>
    			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    			<input type="submit" value="submit" name="submit">
		    </form>
  		</div>
  	

	</div>

	<div class="footer">
  		<h2>© 2020 Solange </h2>
	</div>



</body>
</html>