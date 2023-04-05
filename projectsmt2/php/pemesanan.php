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
$sql = "CREATE TABLE pemesanan	(
	id_pemesanan INT(10) AUTO_INCREMENT PRIMARY KEY,
    nomor_meja INT(3),
	atas_nama VARCHAR(50),
    menu_1 ENUM('Tidak Ada', 'Espresso', 'Americano', 'Cappuccino', 'Latte', 'Vanilla Latte', 'Caramel Latte', 'Mochaccino', 'Flat White', 'Affogato', 'Frappe', 'White Coffee', 'Black Coffe', 'Strawberry Milk', 'Banana Milk', 'Chocolate Milk', 'Matcha Milk', 'Lemon Tea', 'Strawberry Tea', 'Java Tea', 'aramel Tea', 'Kentang Goreng Saus Keju', 'Sandwich Telur', 'Buttermilk Waffle', 'Pancake Pisang', 'Pudding Roti Tawar', 'Klappertart', 'Fish And Chip','Macaroni Schotel', 'Mozarella Cheese Steak'),
	jumlah_1 INT(10),
	menu_2 ENUM('Tidak Ada', 'Espresso', 'Americano', 'Cappuccino', 'Latte', 'Vanilla Latte', 'Caramel Latte', 'Mochaccino', 'Flat White', 'Affogato', 'Frappe', 'White Coffee', 'Black Coffe', 'Strawberry Milk', 'Banana Milk', 'Chocolate Milk', 'Matcha Milk', 'Lemon Tea', 'Strawberry Tea', 'Java Tea', 'aramel Tea', 'Kentang Goreng Saus Keju', 'Sandwich Telur', 'Buttermilk Waffle', 'Pancake Pisang', 'Pudding Roti Tawar', 'Klappertart', 'Fish And Chip','Macaroni Schotel', 'Mozarella Cheese Steak'),
	jumlah_2 INT(10),
	menu_3 ENUM('Tidak Ada', 'Espresso', 'Americano', 'Cappuccino', 'Latte', 'Vanilla Latte', 'Caramel Latte', 'Mochaccino', 'Flat White', 'Affogato', 'Frappe', 'White Coffee', 'Black Coffe', 'Strawberry Milk', 'Banana Milk', 'Chocolate Milk', 'Matcha Milk', 'Lemon Tea', 'Strawberry Tea', 'Java Tea', 'aramel Tea', 'Kentang Goreng Saus Keju', 'Sandwich Telur', 'Buttermilk Waffle', 'Pancake Pisang', 'Pudding Roti Tawar', 'Klappertart', 'Fish And Chip','Macaroni Schotel', 'Mozarella Cheese Steak'),
	jumlah_3 INT(10),
	menu_4 ENUM('Tidak Ada', 'Espresso', 'Americano', 'Cappuccino', 'Latte', 'Vanilla Latte', 'Caramel Latte', 'Mochaccino', 'Flat White', 'Affogato', 'Frappe', 'White Coffee', 'Black Coffe', 'Strawberry Milk', 'Banana Milk', 'Chocolate Milk', 'Matcha Milk', 'Lemon Tea', 'Strawberry Tea', 'Java Tea', 'aramel Tea', 'Kentang Goreng Saus Keju', 'Sandwich Telur', 'Buttermilk Waffle', 'Pancake Pisang', 'Pudding Roti Tawar', 'Klappertart', 'Fish And Chip','Macaroni Schotel', 'Mozarella Cheese Steak'),
	jumlah_4 INT(10),
	menu_5 ENUM('Tidak Ada', 'Espresso', 'Americano', 'Cappuccino', 'Latte', 'Vanilla Latte', 'Caramel Latte', 'Mochaccino', 'Flat White', 'Affogato', 'Frappe', 'White Coffee', 'Black Coffe', 'Strawberry Milk', 'Banana Milk', 'Chocolate Milk', 'Matcha Milk', 'Lemon Tea', 'Strawberry Tea', 'Java Tea', 'aramel Tea', 'Kentang Goreng Saus Keju', 'Sandwich Telur', 'Buttermilk Waffle', 'Pancake Pisang', 'Pudding Roti Tawar', 'Klappertart', 'Fish And Chip','Macaroni Schotel', 'Mozarella Cheese Steak'),
	jumlah_5 INT(10),
	tanggal_pesanan TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql))	{
	echo "Table pemesanan created successfully";
}	else	{
	echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>