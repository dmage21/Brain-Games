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

</center>
<?php
// posting variables from form
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
// variables to connect to server
$DB_HOST = "ec2-3-218-171-44.compute-1.amazonaws.com";
$DB_USER = "zbesxlnsnqhoam";
$DB_PASS = "641fb695885f0e0e22ee82ce9d624848a33d2c7ba1e76d517c5f2d288f35f77f";
$DB_NAME = "dd5ivembuns2tk";

//conncecting to server
$conn = new mysqli ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
// query to insert email and password into mysql table
$query = "INSERT INTO userAccounts(userName,email,password) values ('$user','$email','$password')";
$res = $conn->query($query);
 if ($res){
 	echo "<center> <h3> Signed up Successfully!</h3>";
	echo "<br> <br> <h3> Log in to your new account: <a href='login.html'> Login </a>";
 }
 	else {
		echo "<center> <h2> Error Creating Account";
	}
// close connection to database
$conn ->close();
?>
</body>
<center> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br>
<h3> This is a school project, not an actual store. </h3> </center>
</html>