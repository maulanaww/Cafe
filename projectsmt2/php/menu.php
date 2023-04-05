<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dessert_cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error)	{
	die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE menu	(
	id_menu INT(10) AUTO_INCREMENT PRIMARY KEY,
	nama_menu VARCHAR(50),
	harga_menu INT(5)
)";
if (mysqli_query($conn, $sql))	{
	echo "Table menu created successfully";
}	else	{
	echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>