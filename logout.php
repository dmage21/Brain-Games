<!DOCTYPE html>
<html> 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
</head>

<!-- Log out first to display the correct headers in the navbar -->
<?php
if(session_status()==2){
session_destroy();
echo"<br><br> <br> <br> <h2> You have been logged out successfully </h2>";
}
?>

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
