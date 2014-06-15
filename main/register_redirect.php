<?php
include 'hash.php';

$email = $_POST["email"];
$pass = $_POST["password"];
$id = '12345';

$hashedPass = bcrypt($email, $pass);

//MySQL Stuff
$con = mysqli_connect("localhost","root","","acm");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Insert into the database
mysqli_query($con,"INSERT INTO MEMBERS (email, password, id)
VALUES ('$email', '$hashedPass', '$id')");

?>