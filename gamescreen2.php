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
  <a href='signup.php' >Sign up</a>
  <a href="contact.php">Contact</a>
  <a href="aboutus.php">About</a>
  <a href="donate.php">Donate</a> 
	<?php
	session_start();
	if (isset($_SESSION["loggedin"])) {
	echo "<a href='logout.php' style=float:right>Logout</a> ";
	}else {echo "<a href='login.php' >Login</a> &nbsp; &nbsp; &nbsp	";}
	?>
</div>
<left>
<img src="brainart.png" width="200" height="175"> </h1> 
<?php
session_start();
if (isset($_SESSION["loggedin"])) 
{
	echo "<center> <h2> Hello, ". $_SESSION["user"] . " </h2> </center>";
}
	?>
		</center>
		<center id="gameZone">
			<label>Current score:</label>
			<div id="scoreCount">0</div>
			<label for="debugToggle">Check your answer</label>
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

