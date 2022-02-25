<!DOCTYPE html>
<html>
	<head>
		<!-- Referencing to the style sheet --> 
		<link rel="stylesheet" href="cryptogame.css">
		<!-- Game script -->
		<script src="cryptogame.js" async defer></script>
	</head>
	<body style="background-color:LightSalmon;">
		<!-- Making the links at the top of the page. -->
		<left>
			<h1>
				<a href="index.php">Brain Games</a>
				<img src="brainart.png" width="200" height="175">
			</h1>
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
			}
			else {
				echo "<a href='login.php'>Login</a> &nbsp; &nbsp; &nbsp	";
			}
		?>
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
