<!DOCTYPE html>
<html> 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
 
 <left>
 <h1> <a href="index.php">Brain Games </a>  <img src="brainart.png" width="200" height="175"> </h1>
</left>
<center>
<h2> <a href="index.php">Home</a>            &nbsp; &nbsp; &nbsp; 
<a href="signup.php">Sign Up</a>             &nbsp; &nbsp; &nbsp;
<a href="categories.php">About Us</a>  &nbsp; &nbsp; &nbsp;
<a href="search.php">Donate Now</a>              &nbsp; &nbsp; &nbsp; 

<?php
session_start();
if (isset($_SESSION["loggedin"])) {
echo "<a href='logout.php'>Logout</a> ";
}else {echo "<a href='login.html'>Login</a> &nbsp; &nbsp; &nbsp	";}
?>
</center>
</head>
<body style="background-color:LightSalmon;">
<!-- Making the links at the top of the page. -->

<center> <br> <br> <br> <br> </center>
<left> <h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Game 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Game 2 </h2> </left>
<left> <a href="gamescreen.php"> <img src="game1.png" width="200" height="200" style="margin: 0px 50px 0px 50px;"> </a><left> <a href="gamescreen2.php"> <img src="game2.png" width="200" height="200" style="margin: 0px 50px 0px 0px;"> </a> </left> 

<br>

<center> <h3> <div> Welcome to Brain Games! Brain Games was established in 2021,<br> and is a collection
of stimulating puzzles and games. This webiste allows you to<br>
play games that educate you while being a fun experiennce for people of all ages. </div> </h3> </center>
<br> <br>
<center> <h3> This is a school project </h3> </center> 

</body>
</html>
