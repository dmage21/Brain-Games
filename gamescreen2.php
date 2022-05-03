<!DOCTYPE html>
<html> 
<head>
<!-- Referencing to the style sheet --> 
<link rel ="stylesheet" href="cryptogame.css">
<script src="cryptogame2.js" async defer></script>
</head>

<!-- Making the links at the top of the page. -->
<center>
<div class="topnav">
  <a href="index.php">Brain Games </a> 
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
		<center id="gameZone">
			<label for="debugToggle">Debug</label>
			<input type="checkbox" id="debugToggle" checked="true"></input>
			<div id="debugPane" class="hidden">
				<label>Correct answer:</label>
				<div id="correctAnswer"></div>
			</div>
			<label id="title">Solve the Expression:</label>
			<label id="rightNum"></label>
			<label id="expression"></label>
			<label id="gameFeedback"></label>
			<input id="userGuess" type="text"/>
			<button id="guessButton">Guess</button>
		<center>
	</body>
</html>

