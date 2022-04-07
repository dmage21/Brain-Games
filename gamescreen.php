<!DOCTYPE html>
<html>
	<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="stylesheet.css">
<script src="cryptogame.js" async defer></script>
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
