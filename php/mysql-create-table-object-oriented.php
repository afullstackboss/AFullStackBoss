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
$sql = "create table afsb (
id int(6) unsigned auto_increment primary key, 
firstname varchar(30) not null, 
lastname varchar(30) not null, 
email varchar(50), 
reg_date timestamp default current_timestamp on update current_timestamp
)";

if ($conn->query($sql) === true){
	echo "Table sfsb created successfully";	
} else {
	echo "Error creating table:".$conn->error;
}
$conn->close(); 
?>