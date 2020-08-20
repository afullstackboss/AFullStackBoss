<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afsb";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}

$sql = "insert into afsbc (category,description)
values ('Automotive','Automobile'),
values ('Electronics','Technician')";

if ($conn->query($sql) === true) {
	echo "New category record created successfully";
} else {
	echo "Error: ".$sql. "<br>" . $conn->error;
}

$conn->close();

?> 