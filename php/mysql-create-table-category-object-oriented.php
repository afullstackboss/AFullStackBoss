<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afsb";

//Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}

// sql to create table
$sql = "create table afsbc (
id int(6) unsigned auto_increment primary key, 
category varchar(30) not null, 
description varchar(30) not null, 
reg_date timestamp default current_timestamp on update current_timestamp
)";

if ($conn->query($sql) === true){
	echo "Table sfsbc created successfully";	
} else {
	echo "Error creating table:".$conn->error;
}
$conn->close(); 
?>