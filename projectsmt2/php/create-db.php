<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
//Check connection
if ($conn->connect_error)	{
	die("Koneksi Gagal: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE dessert_cafe";
if ($conn->query($sql) === TRUE)	{
	echo "Database berhasil dibuat";
}	else	{
	echo "pembuatan database gagal : " . $conn->error;
}

$conn->close();
?>