<!DOCTYPE html>
<html> 

<head>
<style>
canvas {
 border:5px solid #d3d3d3;
 background-color: #f1f1f1;
 padding: 0;
    margin: auto;
    display: block;
    width: 800px;
    height: 600px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
 }
 
</style>

</head>
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
<right> <img src="ads.png" width="200" height="400"> </right>

</body>
</html>
