<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "dessert_cafe";
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

  $nomor_meja = $_REQUEST['nomor_meja'];
  $atas_nama = $_REQUEST['atas_nama'];
  $menu1 = $_REQUEST['menu1'];
  $jumlah1 = $_REQUEST['jumlah1'];
  $menu2 = $_REQUEST['menu2'];
  $jumlah2 = $_REQUEST['jumlah2'];
  $menu3 = $_REQUEST['menu3'];
  $jumlah3 = $_REQUEST['jumlah3'];
  $menu4 = $_REQUEST['menu4'];
  $jumlah4 = $_REQUEST['jumlah4'];
  $menu5 = $_REQUEST['menu5'];
  $jumlah5 = $_REQUEST['jumlah5'];
  
  $sql = "INSERT INTO pemesanan (id_pemesanan, nomor_meja, atas_nama, menu_1, jumlah_1, menu_2, jumlah_2, menu_3, jumlah_3, menu_4, jumlah_4, menu_5, jumlah_5) VALUES ('', '$nomor_meja', '$atas_nama', '$menu1', '$jumlah1', '$menu2', '$jumlah2', '$menu3', '$jumlah3', '$menu4', '$jumlah4', '$menu5', '$jumlah5' )";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: ../html/checkout.html");
  } else {
    echo "pesanan gagal";
  }
  mysqli_close($conn);
?>