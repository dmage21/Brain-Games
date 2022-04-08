<!DOCTYPE html>
<html> 
<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
</head>

<!-- Making the links at the top of the page. -->
<center>
<div class="topnav">
  <a href="index.php">Brain Games </a> 
  <a href='signup.php' style="float:right;" >Sign up</a>
  <a href="contact.php">Contact</a>
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php' >Logout</a> ";
	}else {echo "<a href='login.php' >Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a> 
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1>
</left>

<h1> Contact Us! <h1> 
<h2> Our Email Address: BrainGamesDevs@gmail.com <br> <br>
Our Phone Number: 555-543-2198 <br> <br>
</h2>
	<form name="Contact Form" action="" method="">
<h2> Fill out your question or concern in the box below, and it will be emailed directly to us! <h2>
          
          <textarea name = "contact" id = "8" cols="80" rows="10" >
		  </textarea> <br>
			<button onclick="popUp()">Submit</button>
			<button onclick="popUp()">Clear</button>
<script>
function popUp() {
	confirm("Are you sure?");
}
</script>	  
        </form
</body>
</html>