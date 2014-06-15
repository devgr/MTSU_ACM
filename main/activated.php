<?php

$token = $_POST["token"];
$hash = $_POST["hiddenHash"];

//MySQL Stuff
$con = mysqli_connect("localhost","root","","acm");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT HASH FROM REGLINKS WHERE 1 = 1");
$row = mysqli_fetch_array($result);

if(in_array($hash, $row)){
	echo "Link already activated.";
}
else{
// Insert into the database
	mysqli_query($con,"INSERT INTO REGLINKS (HASH, USED)
	VALUES ('$hash', 0)");

	echo "success";
}


?>