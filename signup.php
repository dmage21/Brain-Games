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

<script>
	age();
	</script>

</center>
<center> <br> <br> <br> <br> </center>
<center>
		<div class="container">
<!-- creating sign up form -->
			<form name="Sign Up Form" action="signupinsert.php" method="post">
<h2> Sign Up! </h2> <br>
<h3>
Username: <input type="text" name ="user" id="1" size="25"
maxlength="25" value=""> <br> <br>

Email Address: <input type="text" name ="email" id="2" size="25"
maxlength="50" value=""> <br> <br>

Password: <input type="password" name ="password" id="3" size="25"
maxlength="" value=""> <br> <br>

<input type="checkbox" id="age" name="age" value="Age">
<label for="age"> I am over the age of 13.</label><br><br>


<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset" value="Cancel" />

<script>
function age() {
  document.getElementById("age").required = true;
}
</script>


</center>
</h3>
			</form>
		</div>
	</body>
</html>
