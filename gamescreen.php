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
<style>
canvas {
	border:5px solid #d3d3d3;
	background-color: #f1f1f1;
	padding: 0;
	margin: auto;
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
}

label {
	user-select: none;
}

#debugPane {
	background: #0002;
	border: 1px solid black;
	display: flex;
	flex-wrap: wrap;
	margin: 1rem 1rem 0 1rem;
	padding: 0.5rem;
} #debugPane.hidden {
	display: none;
}

#debugPane > label, #debugPane > div {
	display: block;
	flex: 1 0 auto;
	padding: 0 0.25rem;
	width: 50%;
	box-sizing: border-box;
}

#debugPane > label {
	text-align: right;
}

#debugPane > div {
	text-align: left;
}

#gameZone {
	display: flex;
	flex-direction: column;
	padding: 0 calc(50% - 16rem);
}

#title {
	margin-top: 1rem;
}

#userGuess {
	margin: 1rem 0 0.5rem 0;
	text-align: center;
}
</style>

		</center>
		<center id="gameZone">
			<label for="debugToggle">Debug</label>
			<input type="checkbox" id="debugToggle" checked="true"></input>
			<div id="debugPane" class="hidden">
				<label>Correct answer:</label>
				<div id="correctAnswer"></div>
				<label>Cipher type:</label>
				<div id="cipherType"></div>
			</div>
			<label id="title">Guess the Word</label>
			<label id="encryptedWord"></label>
			<label id="gameFeedback"></label>
			<input id="userGuess" type="text"/>
			<button id="guessButton">Guess</button>
		<center>
	</body>
</html>
