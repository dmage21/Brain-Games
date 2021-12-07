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
}else {echo "<a href='login.php'>Login</a> &nbsp; &nbsp; &nbsp	";}
?>
</center>

<center> <img src="playButton.png" onclick="playGif(loading.gif)" /> </center>

<script>
 function playGif(gif_img) {            
  if (gif_img.src.endsWith("gif"))
  {
   gif_img.src = gif_img.src.substring(0, gif_img.src.length - 3) + "playButton.png";
  } else 
  {
   gif_img.src = gif_img.src.substring(0, gif_img.src.length - 3) + "loading.gif";
  }    
 }
</script>




<br> <br>
<right> <img src="ads.png" width="200" height="400"> </right>

</body>
</html>
