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
  <a href='signup.php' >Sign up</a>
  <a href="contact.php">Contact</a>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a> 
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php' style=float:right>Logout</a> ";
	}else {echo "<a href='login.php' >Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1> 
<?php
session_start();
if (isset($_SESSION["loggedin"])) 
{
	echo "<center> <h2> Hello, ". $_SESSION["user"] . " </h2> </center>";
}
	?>
</left>
<left>
<img src="brainart.png" width="200" height="175"> </h1>
</left>
<?php
if(session_status()==2){

echo"<h2> Thank you for your Donation, " . $_SESSION["user"] . "</h2> </center>";
}
?>

	</body>
</html>
