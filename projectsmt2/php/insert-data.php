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

$sql = "INSERT INTO menu (id_menu, nama_menu, harga_menu)
VALUES ('1', 'Espresso', '10000'),
       ('2', 'Americano', '12000'),
       ('3', 'Cappuccino', '10000'),
       ('4', 'Latte', '13000'),
       ('5', 'Vanila Latte', '15000'),
       ('6', 'Caramel Latte', '15000'),
       ('7', 'Mochaccino', '12000'),
       ('8', 'Flat White', '15000'),
       ('9', 'Affogato', '16000'),
       ('10', 'Frappe', '14000'),
       ('11', 'White Coffee', '13000'),
       ('12', 'Black Coffe', '7000'),
       ('13', 'Strawberry Milk', '15000'),
       ('14', 'Banana Milk', '15000'),
       ('15', 'Chocolate Milk', '15000'),
       ('16', 'Matcha Milk', '15000'),
       ('17', 'Lemon Tea', '10000'),
       ('18', 'Strawberry Tea', '10000'),
       ('19', 'Java Tea', '8000'),
       ('20', 'Caramel Tea', '10000'),
       ('21', 'Kentang Goreng Saus Keju', '13000'),
       ('22', 'Sandwich Telur', '8000'),
       ('23', 'Buttermilk Waffle', '15000'),
       ('24', 'Pancake Pisang', '10000'),
       ('25', 'Pudding Roti Tawar', '10000'),
       ('26', 'Klappertart', '13000'),
       ('27', 'Fish And Chips', '20000'),
       ('28', 'Macaroni Schotel', '7000'),
       ('29', 'Mozarella Cheese Steak', '13000')
";

if ($conn->query($sql) === TRUE)	{
	echo "Daftar menu berhasil diinputkan";
}	else	{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>