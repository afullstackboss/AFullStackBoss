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

$sql = "insert into afsb (firstname,lastname,email)
values ('Roland','Diaz', 'afullstackboss@gmail.com')";

if ($conn->query($sql) === true) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql. "<br>" . $conn->error;
}

$conn->close();

?> 