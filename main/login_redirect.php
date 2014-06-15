<?php
include 'hash.php';


$email = $_POST["email"];
$pass = $_POST["password"];

// Create the MySQL connection and test the connection
$con = mysqli_connect("localhost","root","","acm");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Query the database for the correct user credentials
$result = mysqli_query($con,"SELECT password FROM MEMBERS WHERE email = '$email'");
$row = mysqli_fetch_array($result);



// Retrieve the hash from the database and trim the newline char off of the end
$hashedPass = $row['password'];
$hash = trim($hashedPass, "\n");

// Test the credentials
if(password_verify($pass,$hash)){
	echo "Success";
}
else{
	echo "Failure";
}

?>