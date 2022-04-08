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
  <a href="index.php">Home</a>
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
<center> <br> <br> <br> <br> </center>
<left>Brain Games was established in 2018 after its successful launch of the educational website known as NogginTester, a website that provides various studying tools for students to use in order to further their understanding of various school subjects. It has since been this company’s mission to provide a fun and easy learning environment for people of all ages and backgrounds. Brain Games hopes to have a wide variety of free to use educational websites and sources that are easily accessible to the public, grow their user base into the hundreds of thousands and to eventually sell a subscription service that provides full courses and guides for various subjects.<br><br> 
	Top level management are looking to expand their online presence through the use of social media and creating new sister sites that will provide educational benefits in various forms. Some of these websites may be selling educational products while others may be learning sources that earn their revenue through advertisements and donations. During this time of expansion the company will also begin developing its own virtual courses on a wide array of subjects. These courses will be recorded and will provide practice problems and within 5 years, they look to market this product to the public.<br><br>
	Brain Games, the educational game website that takes its name after its parent company, will be a new website that provides a fun and interactive learning environment for people of all ages through the use of educational games. This website will be free and will generate revenue through ad space. This website will create a new revenue stream for the company which will then be used towards funding the maintenance of the website as well as funding the future course subscription service. This website will also increase Brain Games’ online presence and will provide the current NogginTester user base a new learning tool to use. 
</left>
</html>
  
