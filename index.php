<!DOCTYPE html>
<html> 

<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
</head>
<body>
<!-- Making the links at the top of the page. -->
<left>
 <h1> <a href="index.php">Brain Games </a>  <img src="brain.png" width="200" height="175"> </h1>
</left>
<center>
<h4> <a href="phase3.php"> Home</a>            &nbsp; &nbsp; &nbsp; 
<a href="signup.php"> Sign Up </a>             &nbsp; &nbsp; &nbsp;
<a href="categories.php"> About Us </a>  &nbsp; &nbsp; &nbsp;
<a href="search.php"> Donate Now </a>              &nbsp; &nbsp; &nbsp; 

<?php
session_start();
if (isset($_SESSION["loggedin"])) {
echo "<a href='logout.php'> Logout </a> ";
}else {echo "<a href='login.html'> Login </a> &nbsp; &nbsp; &nbsp	";}
?>
<center> <br> <br>
<center> <img src="http://unixweb.kutztown.edu/~kdodr959/Project/Phase1/images/garfieldbook.jpg" width = "250" height="300"> </center>
<center> <h2> <div> Welcome to Garfield's Online Bookstore! Garfield's Books was established in 1998,<br> and has since
grown a large collection of books. This webiste allows you to<br>
 browse a vast online bookstore as well as make purchases that will be delivered to you! </div> </h2> </center>
<br> <br>
<center> <h3> This is a school project, not an actual store. </h3> </center> 

</body>
</html>
