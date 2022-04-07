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
  <a class="active" href="index.php>Home</a>
  <a href="#contact">Contact</a>
  <a href="signup.php" style="float:right;" >Sign up</a>
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php'style="float:right;" >Logout</a> ";
	}else {echo "<a href='login.php'style="float:right;" >Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a> 
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1>
</left>

</center>
<center> <br> <br> <br> <br> </center>
<center> <h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Game 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Game 2 </h2> </center>
<center> <a href="gamescreen.php"> <img src="game1.png" width="200" height="200" style="margin: 0px 50px 0px 50px;"> </a> <a href="gamescreen2.php"> <img src="game2.png" width="200" height="200" style="margin: 0px 50px 0px 0px;"> </a> </center>

<br>

<center> <h3> <div> Welcome to Brain Games! Brain Games was established in 2021,<br> and is a collection
of stimulating puzzles and games. This webiste allows you to<br>
play games that educate you while being a fun experiennce for people of all ages. </div> </h3> </center>
<br> <br>
<center> <h3> This is a school project </h3> </center> 


</body>
</html>
