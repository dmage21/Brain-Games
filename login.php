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
<center> <br> <br> <br> <br> </center>
<?php
//variables for connecting and getting email key for login
$email = $_POST['email'];
$password = $_POST['password'];
$DB_HOST = "localhost";
$DB_USER = "kdodr959";
$DB_PASS = "gSpKMefyx735";
$DB_NAME = "bookstore_kdodr959";
// connecting to server
$conn = new mysqli ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
// query to test email to see if its in the table
$query = "SELECT Email, Passwd, FirstName, LastName, CustomerID FROM Customers where Email = '$email' ";
$res = $conn->query($query);
while($row = $res->fetch_assoc()){ 
	if($email == $row['Email'] && $password == $row['Passwd']) {
		echo "<center> <h2> Logged in Successfully </h2> </center>" ;

		echo '<center> <h2> Hello, '. $_SESSION["username"]; 
	
	} else {
		echo "<center> <h2>Error Logging In</center>" ;
	}
}
// close connection to database
$conn ->close();	
?>
</body>
<center> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br>
<h3> This is a school project. </h3> </center> 

</html>
