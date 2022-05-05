<?php
if($_POST["message"]) {
	$s = mail("kyledodrill512@gmail.com", "Form to email message", $_POST["message"], "");
	echo $s;
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
</head>
<body>
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

<h1> Contact Us! <h1> 
<h2> Our Email Address: BrainGamesDevs@gmail.com <br> <br>
Our Phone Number: 555-543-2198 <br> <br>
</h2>
	<form name="Contact Form" action="contact.php" method="post">
		<textarea name="message" id = "8" cols="80" rows="10" ></textarea>
		<input type="submit">
	</form>
<h2> Fill out your question or concern in the box below, and it will be emailed directly to us! <h2>
          
	
</body>
</html>