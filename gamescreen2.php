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
  <a href="signup.php">Sign up</a>
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php'>Logout</a> ";
	}else {echo "<a href='login.php'>Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a>
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1>
</left>
</center>




<center> <input id="clickMe" type="button" value="Play" onclick="startGame();" /> <center>




<script>

var myGamePiece;
var myObstacles = [];
var myScore;

function startGame() {
    
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
		document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 100;
        this.interval = setInterval(updateGameArea, 20);
	this.canvas.translate(1000,500);
        },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

</script>

<br>


<br> <br>

</body>
</html>
