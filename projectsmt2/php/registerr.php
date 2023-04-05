<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "dessert_cafe";
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $nama_pengguna = $_REQUEST['nama'];
  $jenis_kelamin = $_REQUEST['jenis-kelamin'];
  $tanggal_lahir = $_REQUEST['tanggal-lahir'];
  
  $sql = "INSERT INTO admin (id, username, password, nama_pengguna, jenis_kelamin, tanggal_lahir) VALUES ('', '$username', '$password', '$nama_pengguna', '$jenis_kelamin', '$tanggal_lahir')";
  
  $result = mysqli_query($conn, $sql);
  if ($result) {
          header("Location: login.php");
          echo '<script>alert"Sukses!! Registrasi Berhasil"</script>';
      }else{
          echo '<script>alert"Sorry!!"</script>';
      }
      mysqli_close($conn);
?>