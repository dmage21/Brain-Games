<!DOCTYPE html>
<html> 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
 

</head>
<body style="background-color:LightSalmon;">
<!-- Making the links at the top of the page. -->
<left>
<h1> <a href="index.php">Brain Games </a>  <img src="brainart.png" width="200" height="175"> </h1>
</left>
<center>
<h2> <a href="index.php">Home</a>            &nbsp; &nbsp; &nbsp; 
<a href="signup.php">Sign Up</a>             &nbsp; &nbsp; &nbsp;
<a href="aboutus.php">About Us</a>  &nbsp; &nbsp; &nbsp;
<a href="donate.php">Donate Now</a>              &nbsp; &nbsp; &nbsp; 

<?php
session_start();
if (isset($_SESSION["loggedin"])) {
echo "<a href='logout.php'>Logout</a> ";
}else {echo "<a href='login.html'>Login</a> &nbsp; &nbsp; &nbsp	";}
?>
</center>
<center> <br> <br> <br> <br> </center>
<center>
		<div class="container">
<!-- creating sign up form -->
			<form name="Sign Up Form" action="signupinsert.php" method="post">
<h2> Sign Up! </h2> <br>
<h3>
First Name: <input type="text" name ="first_name" id="1" size="25"
maxlength="25" value=""> <br> <br>

Last Name: <input type="text" name ="last_name" id="2" size="25"
maxlength="25" value=""> <br> <br>

Email Address: <input type="text" name ="email" id="3" size="25"
maxlength="50" value=""> <br> <br>

Password: <input type="password" name ="password" id="4" size="25"
maxlength="" value=""> <br> <br>

Address: <input type="text" name ="address" id="5" size="25"
maxlength="25" value=""> <br> <br>

City:<input type="text" name ="city" id="6" size="25"
maxlength="25" value=""> <br> <br>

State:<input type="text" name ="state" id="7" size="25"
maxlength="25" value=""> <br> <br>

Zip Code: <input type="number" name ="zipcode" id="1" size="25"
maxlength="25" value=""> <br> <br>
			<input type="submit" name="submit" value="Submit" />
	<input type="reset" name="reset" value="Cancel" />
<script>
function popUp() {
	confirm("Are you sure?");
}
</script>


</center>
</h3>
			</form>
		</div>
	</body>
</html>
