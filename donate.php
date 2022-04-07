<!DOCTYPE html>
<html> 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
</head>

<!-- Making the links at the top of the page. -->
<center>
<div class="topnav">
  <a href="index.php">Brain Games </a> 
  <a class="active" href="index.php>Home</a>
  <a href="#contact">Contact</a>
  <a href="signup.php" style="float:right;" >Sign up</a>
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php'>Logout</a> ";
	}else {echo "<a href='login.php'>Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a>
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1>
</left>

</center>
<center> <br> <br> <br> <br> </center>
<center>
		<div class="container">
<!-- creating sign up form -->
			<form name="Donation Form" action="donation.php" method="post">
<h2> Care to Donate? </h2> <br>
<h3>
Amount: <input type="text" name ="amount" id="1" size="25"
maxlength="25" value=""> <br> <br>

Card Holder: <input type="text" name ="name" id="2" size="25"
maxlength="50" value=""> <br> <br>

Credit Card Number: <input type="text" name ="number" id="3" size="25"
maxlength="" value=""> <br> <br>


  
Expiration Date: <input type="text" name ="date" id="5" size="25"
maxlength="" value=""> <br> <br>

			<input type="submit" name="submit" value="Submit" />
	<input type="reset" name="reset" value="Cancel" />
<script>
function popUp() {
	confirm("Are you sure?");
}
</script>

<h2> (This is a school project, do not actually enter any credit card information into this website.) </h2>

</center>
</h3>
			</form>
		</div>
	</body>
</html>
